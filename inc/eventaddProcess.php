<?php
include ('connaddress.php');
    if (isset($_POST['add_event'])){
        $sql = "INSERT INTO events (event, date, type, entry, description) VALUES ('$_POST[eventName]','$_POST[date]','$_POST[type]','$_POST[entry]','$_POST[description]')";
    }

    if (!mysqli_query($conn, $sql))
    {
        die('Error: ' . mysqli_connect_error());
    };
    mysqli_close($conn);
    header('location:../admin.php');
?>