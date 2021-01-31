<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
header("location:login.php");
session_destroy();

?>
 

  
   
    
     
      
       
      <?php
/*  
include ('login.php');
session_start();

header("Location:login.php");
?>
<?php
session_start();
if (isset($_SESSION['email']))
{
    unset($_SESSION['password']);
}
header("location:index.php");
*/ ?>