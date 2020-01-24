<?php
include "connaddress.php";?>
    <div class="container-fluid leftcontent center">
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
        $sponsorLogo=$row['sponsorLogo'];
        //-display the result of the array ?>
            <table class="table-condensed center">
                <tr>
                    <td>
                        <h5><a href='<?php echo "$sponsorLink"?>'><?php echo "$sponsorName"?></a></h5>
                    </td>
                    <td>
                        <h5></h5>
                    </td>
                    <td>
                        <h5><?php echo "$sponsorLogo"?></h5>
                    </td>
                </tr>
            </table>
            <?php
    }
?>
                <!--  End of Update list table   +++++++++++++++++++++++ -->
</div>
