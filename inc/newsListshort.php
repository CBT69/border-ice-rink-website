<?php
include "connaddress.php";?>
    <div class="container-fluid leftcontent center">
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
        //-display the result of the array ?>
            <table class="table-condensed">
                <tr>
                    <td>
                        <h5><?php echo "$title"?></h5>
                    </td>
                    <td>
                        <h5><?php echo "$date"?></h5>
                    </td>
                    <td class="">
                      <p>
                        <a href="news.php">Read more</a>
                      </p>
                    </td>
                </tr>
            </table>
            <?php
    }
?>
                <!--  End of Update list table   +++++++++++++++++++++++ -->
    </div>
