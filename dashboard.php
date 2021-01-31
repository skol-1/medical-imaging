<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style >
    .preview img { 
        max-height: 100px; 
        }
    </style>
</head>
<body style=" 
    background: url('assets/141516.jpg') no-repeat;
    background-size: cover;">
<nav class="navbar " >
  <a class="navbar-brand" href="#" style="text-align: center;margin: auto;font-family: sans-serif;font-size: 40px;color: aliceblue;">DASHBOARD</a>
</nav>
    
<div class="rows" style="margin-top: 150px;display: flex">


   <div class="col-md-3" style="margin-left:auto;">
       <div class="card" style="max-width: 18rem;background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(16,173,171,1) 100%, rgba(0,212,255,1) 100%);">
 <img class="card-img-top" src="assets/3d-brain.jpg" alt="Card image cap">
  <div class="card-header" style="color: aliceblue">Brain Scan</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"><a href="brain_scan.html"><button type="button" class="btn btn-outline-light" >ENTER</button></a></p>
  </div>
   </div>
    
</div>
        <div class="col-md-3" style="margin-right:auto">
       <div class="card" style="max-width: 18rem;background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(35,209,151,1) 100%, rgba(0,212,255,1) 100%);">
  <img class="card-img-top" src="assets/5844.jpg" alt="Card image cap">
  <div class="card-header" style="color: aliceblue">LOG OUT</div>
  <div class="card-body">
  
    <h5 class="card-title"></h5>
    <p class="card-text"><a href="logout.php"><button type="button" class="btn btn-outline-light" >END SESSION</button></a></p>
  </div>
   </div>
    
</div>
      

    </div>



    
    
    </body>
</html>  
