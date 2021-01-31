<?php
try{
	$dbcon= mysqli_connect("localhost","root","","skol");
     mysqli_set_charset($dbcon, 'utf8');
}
catch (Exception $ex){
    print "An Exception occurred. Message: " . $ex->getMessage();
} catch (Error $e){
    print "The system is busy please try later";
}


	/*$msg=mysqli_connect_error();//if no error it gives ""- empty string
if($msg=="")
	echo "Connected Successfully";
else
	echo $msg;
*/
?>