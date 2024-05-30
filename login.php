<?php 
session_start();
include("config.php"); //including config.php in our file
$username = $_POST["unameh"]; //Storing username in $username variable.
$password = $_POST["passwordh"]; //Storing password in $password variable.

$match = "select id from login where uname = '".$_POST['unameh']."'
and password = '".$_POST['passwordh']."';"; 

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 

if ($num_rows <= 0) { 

echo "Sorry, there is no username $username with the specified password.";

echo "Try again";

exit; 

} else {


$_SESSION['user']= $_POST["unameh"];

header("location:admin.php");

// It is the page where you want to redirect user after login.
}
?>
