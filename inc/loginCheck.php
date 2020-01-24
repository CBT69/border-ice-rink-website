<?php
session_start();
include "connaddress.php";
//Output buffering start -not always necessary
//but can prevent errors with session
ob_start();
//username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];
        //Get the username and password from the login form.
        //Prevent SQL injections. The stripslashes() function removes backslashes.
        //It can be used to clean up data retrieved from a database or from an HTML form.
$username = stripslashes($username);
$password = stripslashes($password);
        //The mysql_real_escape_string() function escapes special characters
        //in a string for use in an SQL statement
        //The following characters are affected: \x00, \n, \r, \, ', ", \x1a
        //This function is used to prevent database attack*/
$username=mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
        //Customer search
$query="SELECT * FROM users WHERE email='$username' and password='$password'";
$result=mysqli_query($conn, $query);
// mysql_num_rows function counts the table rows that match
//If result matched $username and $password, table row must be 1 row
$count=mysqli_num_rows($result);
    if($count==1){
        $_SESSION['loggedin'] = true;
        $_SESSION['customer'] = true;
        //Register $username, $password and redirect to file "loginSuccess.php"*/
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        unset($_SESSION['error']);
        header("location:loginSuccess.php");
        }
        else {
	         $_SESSION['error']='<span><p class="username">
           "Incorrect login or password"</p></span>';
           header("location:../index.php");
        }
/*Empties the output buffer*/
ob_end_flush();
?>
