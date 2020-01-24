<?php
include "connaddress.php";?>
    <div class="container-fluid">
        <!--  Update list table   +++++++++++++++++++++++ -->
        <?php
        //-query the database table
    $query="SELECT * FROM news";

        //-run the query against the msql query function
    $result=mysqli_query($conn, $query);

        //-create while loop and loop through result set
    while($row=mysqli_fetch_array($result)){
        $title=$row['title'];
        $date=$row['date'];
        $author=$row['author'];
        $image=$row['image'];
        $content=$row['content'];
        //-display the result of the array ?>
            <table class="table table-responsive shadow">
                <tr>
                    <td class="leftbox">
                        <h3><?php echo "$title"?></h3>
                    </td>
                    <td class="leftbox">
                        <h5><?php echo "$date"?></h5>
                        <h4><?php echo "$author"?></h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo "$image"?>
                        <p class="darktext"><?php echo "$content"?></p>
                    </td>
                </tr>
                <br>
            </table>
        <br>
            <?php
    }
?>
                <!--  End of Update list table   +++++++++++++++++++++++ -->
    </div>
