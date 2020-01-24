<?php
session_start();
ob_start();
if (isset($_SESSION['admin'])){
  unset($_SESSION['error']);
  unset($_SESSION['customer']);
  header('location:../admin.php');
} else {
//login check- if not registered redirects to login page
  $_SESSION['error'];
  header('location:../index.php');
}
ob_end_flush();
?>