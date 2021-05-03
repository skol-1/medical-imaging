import torch
from tqdm import tqdm
import torch.nn as nn
import torch.optim as optim

from model import UNET
from dataset import BrainScan

from utils import (
    load_checkpoint,
    save_checkpoint,
    get_loaders,
    check_accuracy,
    save_predictions_as_imgs
)

# Hyperparametes
LEARNING_RATE = 1E-4
DEVICE = "cuda" if torch.cuda.is_available() else "cpu"
# DEVICE = "cpu"
BATCH_SIZE = 12
NUM_EPOCHS = 3
NUM_WORKER = 12
IMAGE_HEIGHT = 256
IMAGE_WIDTH = 256
PIN_MEMORY = True
LOAD_MODEL = True
TRAIN_DIR = "D:/skol/python/all_mat_files/Training/*.mat"
VAL_DIR = "D:/skol/python/all_mat_files/Validation/*.mat"


def train_fn(loader, model, optimizer, loss_fn, scaler):
    loop = tqdm(loader)
    for batch_idx, (data, target) in enumerate(loop):
        data = data.to(device=DEVICE)
        targets = target.to(device=DEVICE)

        # forward
        with torch.cuda.amp.autocast():
            prediction = model(data)
            loss = loss_fn(prediction, targets)

        # backward
        optimizer.zero_grad()
        scaler.scale(loss).backward()
        scaler.step(optimizer)
        scaler.update()
        print(loss)

        # update tqdm loop
        loop.set_postfix(loss=loss.item())


def main():
    model = UNET(in_channels=1, out_channels=1).to(device=DEVICE)
    loss_fn = nn.BCEWithLogitsLoss()
    optimizer = optim.Adam(model.parameters(), lr=LEARNING_RATE)
    train_loader, val_loader = get_loaders(
        TRAIN_DIR, VAL_DIR, BATCH_SIZE, NUM_WORKER, PIN_MEMORY
    )

    if LOAD_MODEL:
        load_checkpoint(torch.load("mycheckpoint.pth1.tar"), model)

    scaler = torch.cuda.amp.GradScaler()

    for epoch in range(NUM_EPOCHS):
        train_fn(train_loader, model, optimizer, loss_fn, scaler)

        # TODO :  save model
        checkpoint = {
            'state_dict': model.state_dict(),
            'optimizer': optimizer.state_dict()
        }
        save_checkpoint(checkpoint)

        # TODO : check acuuracy
        check_accuracy(val_loader, model, device=DEVICE)

        # TODO :  Print results to folder
        save_predictions_as_imgs(val_loader, model, folder='saved_imgs/')


if __name__ == '__main__':
    main()
