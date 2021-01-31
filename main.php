<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MEDSPOT</title>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #ls:hover,#av:hover,#ar:hover{
            color:bisque;
        }
    </style>
    
</head>
<!--NAVBAR-->
<body >
   <div style=" 
    background: url('assets/1677868.png') no-repeat;
    background-size: cover;">
       
    <nav class="navbar navbar-expand-lg " >
  <a class="navbar-brand" href="#top" style="color:white" id="top"><h1 style="font-family:Segoe UI Historic;">MEDSPOT</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  <!--THIS IS FOR CREATING A SPACE BETWEEN HEADING AND THE LOGIN/SIGNUP BUTTONS-->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="register.php"><button class="btn btn-outline-warning" type="button" style="margin-right: 10px;" >Signup</button></a>
      <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button" >Login</button></a>
    </form>
  </div>
</nav>



<!--FOOTER-->
<footer class=" text-white text-center text-lg-start" style="margin-top:450px;">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">About The Developers</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0"  style="margin-left:240px;">
        <h5 class="text-uppercase">LinkedIN Accounts </h5>

        <ul class="list-unstyled mb-0">
          <li>
              <a href="https://www.linkedin.com/in/love-sahaj-bb5986194/" class="text-white"  ><h8 id="ls" >LOVE SAHAJ(DEEP LEARNING)</h8></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/anmol-virdi-10b4a719b/" class="text-white" ><h8 id="av">ANMOL VIRDI(ML)</h8></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/amrit-pal-singh-847935205" class="text-white" ><h8 id="ar">AMRIT ROMANA(WEB DEV)</h8></a>
          </li>
         
        </ul>
      </div>
      <!--Grid column-->

  
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-white" href="#"></a>
  </div>
  <!-- Copyright -->
</footer>

<!-- Button trigger modal -->


   </div>
</body>
</html>