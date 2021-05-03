import PIL
from glob import glob
import h5py
import numpy as np
from torch.utils.data import Dataset, DataLoader
import torch


class BrainScan(Dataset):
    def __init__(self, root_dir, size=(256, 256)):
        self.files = glob(root_dir)
        self.size = size

    def __len__(self):
        return len(self.files)

    def __getitem__(self, idx):
        h5file = h5py.File(self.files[idx], 'r')
        image = np.asarray((h5file.get("cjdata").get('image')))
        image = PIL.Image.fromarray(image)
        image = np.asarray(image.resize(self.size)).astype(
            'float64').reshape(1, self.size[0], self.size[1])
        maxi = np.std(image)
        mu = np.mean(image)
        image = (image - mu) / maxi
        mask = np.asarray(h5file.get("cjdata").get('tumorMask'))
        mask = PIL.Image.fromarray(mask)
        mask = np.asarray(mask.resize(self.size)).astype(
            'float64').reshape(1, self.size[0], self.size[1])

        mask[mask == 255.0] = 1.0
        # label = np.asarray(h5file.get("cjdata").get('label')).reshape(1) - 1
        # y = np.hstack((label, mask))
        return torch.tensor(image, dtype=torch.float32), torch.tensor(mask, dtype=torch.float32)
