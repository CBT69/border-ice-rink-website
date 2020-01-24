<?php
include "connaddress.php";?>
    <div class="container-fluid">
        <!--  Update list table   +++++++++++++++++++++++ -->
        <?php
        //-query the database table
    $query="SELECT * FROM events";

        //-run the query against the msql query function
    $result=mysqli_query($conn, $query);

        //-create while loop and loop through result set
    while($row=mysqli_fetch_array($result)){
        $eventName=$row['event'];
        $type=$row['type'];
        $entry=$row['entry'];
        $date=$row['date'];
        $description=$row['description'];
        //-display the result of the array ?>
            <table class="table table-striped shadow">
                <tr>
                    <td>
                        <h5>Event</h5>
                        <h5><?php echo "$eventName"?></h5>
                    </td>
                    <td>
                        <h5>Date</h5>
                        <h5><?php echo "$date"?></h5>
                    </td>
                    <td>
                        <h5>Type</h5>
                        <h5><?php echo "$type"?></h5>
                    </td>
                    <td>
                        <h5>Entry</h5>
                        <h5><?php echo "$entry"?></h5>
                    </td>
                    <td>
                        <h5>Description</h5>
                <h5><?php echo "$description"?></h5>
                    </td>
                    <td> <a href="updatePage.php?id=<?=$row['productRef']?>" class="darktext">Edit</a> </td>
                </tr>
            </table>
            <?php
    }
?>
                <!--  End of Update list table   +++++++++++++++++++++++ -->
    </div>
