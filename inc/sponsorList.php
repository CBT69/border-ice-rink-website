<?php
include "connaddress.php";?>
    <div class="container-fluid">
        <!--  Update list table   +++++++++++++++++++++++ -->
        <?php
        //-query the database table
    $query="SELECT * FROM sponsors";

        //-run the query against the msql query function
    $result=mysqli_query($conn, $query);

        //-create while loop and loop through result set
    while($row=mysqli_fetch_array($result)){
        $sponsorName=$row['sponsorName'];
        $sponsorLink=$row['sponsorLink'];
        $sponsorEmail=$row['sponsorEmail'];
        $sponsorPhone=$row['sponsorPhone'];
        $sponsorAddress=$row['sponsorAddress'];
        $sponsorPostcode=$row['sponsorPostcode'];
        $sponsorLogo=$row['sponsorLogo'];
        //-display the result of the array ?>
            <table class="table table-striped shadow">
                <tr>
                    <td>
                        <h5>Sponsor Name</h5>
                        <h5><?php echo "$sponsorName"?></h5>
                    </td>
                    <td>
                        <h5>Link</h5>
                        <h5><?php echo "$sponsorLink"?></h5>
                    </td>
                    <td>
                        <h5>Email</h5>
                        <h5><?php echo "$sponsorEmail"?></h5>
                    </td>
                    <td>
                        <h5>Phone</h5>
                        <h5><?php echo "$sponsorPhone"?></h5>
                    </td>
                    <td>
                        <h5>Address</h5>
                        <h5><?php echo "$sponsorAddress"?></h5>

                    </td>
                    <td>
                        <h5>Postcode</h5>
                        <h5><?php echo "$sponsorPostcode"?></h5>
                    </td>
                    <td>
                        <h5>Logo</h5>
                        <h5><?php echo "$sponsorLogo"?></h5>
                    </td>
                    <td> <a href="updatePage.php?id=<?=$row['productRef']?>" class="darktext">Edit</a> </td>
                </tr>
            </table>
            <?php
    }
?>
                <!--  End of Update list table   +++++++++++++++++++++++ -->
    </div>
