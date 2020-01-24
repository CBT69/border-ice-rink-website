<?php
include ('connaddress.php');
    if (isset($_POST['add_news'])){
        $sql = "INSERT INTO news (title, date, author, image, content) VALUES
        ('$_POST[title]','$_POST[date]','$_POST[author]','$_POST[image]','$_POST[content]')";
    }

    if (!mysqli_query($conn, $sql))
    {
        die('Error: ' . mysqli_connect_error());
    };
    mysqli_close($conn);
    header('location:../admin.php');
?>
