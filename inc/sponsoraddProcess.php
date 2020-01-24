<?php
include ('connaddress.php');
    if (isset($_POST['add_sponsor'])){
        $sql = "INSERT INTO sponsors (sponsorName, sponsorLink, sponsorEmail, sponsorPhone, sponsorAddress, sponsorPostcode, sponsorLogo) VALUES ('$_POST[sponsorName]','$_POST[sponsorLink]','$_POST[sponsorEmail]','$_POST[sponsorPhone]','$_POST[sponsorAddress]','$_POST[sponsorPostcode]','$_POST[sponsorLogo]')";
    }

    if (!mysqli_query($conn, $sql))
    {
        die('Error: ' . mysqli_connect_error());
    };
    mysqli_close($conn);
    header('location:../admin.php');
?>