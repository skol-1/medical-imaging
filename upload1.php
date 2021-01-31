<?php
include("configure.php");
include("login-process.php");

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $query = "SELECT userID FROM user WHERE email='$email'";
    $q = mysqli_stmt_init($dbcon);
    mysqli_stmt_prepare($q, $query);

    // bind parameter
    mysqli_stmt_bind_param($q, 's', $email);
    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if (!empty($row)){
        // verify password
        //$var = $row["userID"];
        echo gettype($var)."<br>";
        $query2 = "insert into record(uid,image) values('"$row[userID]", ".$image."')";

        echo"Image not inserted";
        }
    }else{
        print "Image inserted";
    }
    
    mysqli_query($dbcon,$query);
  
    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
 
}
?>