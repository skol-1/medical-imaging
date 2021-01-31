<?php
include("mysqli_connect.php");

 $file_name = $_FILES['image']['name'];
if(isset($_FILES['image'])){
    
    
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    
 
    if(move_uploaded_file($file_tmp,"upload/".$file_name)){
        echo"successfully uploaded.";
    }else{
        echo"could not upload file";
    }
}
    
    
    /*
    $msg = '';
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($file_name);
    $dcon = mysqli_connect('localhost','root','','skol') or die('Unable To connect');
    $sql = "insert into record (image_text) values(?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($dcon);
}
    */
    


?>