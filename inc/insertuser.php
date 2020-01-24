<?php
include ('connaddress.php');
    if (isset($_POST['add_user'])){
        $sql = "INSERT INTO users (name, surname, phone, address, postcode, email, password) VALUES ('$_POST[firstName]','$_POST[surname]','$_POST[customerPhone]','$_POST[address]','$_POST[postcode]','$_POST[customerEmail]','$_POST[customerPassword]')";
    }

    if (!mysqli_query($conn, $sql))
    {
        die('Error: ' . mysqli_connect_error());
    }
    mysqli_close($conn);
    header('location:../index.php');
?>
