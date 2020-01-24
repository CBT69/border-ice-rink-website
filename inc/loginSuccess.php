<?php
session_start();
ob_start();
if (isset($_SESSION['loggedin'])){
  unset($_SESSION['error']);
  header('location:../index.php');
} else {
//login check- if not registered redirects to login page
  $_SESSION['error'];
    header('location:../news.php');
}
ob_end_flush();
?>
