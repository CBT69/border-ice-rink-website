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
        $IDnews=$row['IDnews'];
        $title=$row['title'];
        $date=$row['date'];
        $author=$row['author'];
        $image=$row['image'];
        $content=$row['content'];
        //-display the result of the array ?>
        <div class="shadow">
            <table class="table table-striped">
                <tr>
                    <td>
                        <h5>Title</h5>
                        <h5><?php echo "$title"?></h5>
                    </td>
                    <td>
                        <h5>Date</h5>
                        <h5><?php echo "$date"?></h5>
                    </td>
                    <td>
                        <h5>Author</h5>
                        <h5><?php echo "$author"?></h5>
                    </td>
                    <td>
                        <h5>Image</h5>
                        <h5><?php echo "$image"?></h5>
                    </td>
                    <td>
                        <h5>Content</h5>
                        <h5><?php echo "$content"?></h5>
                    </td>
                    <td> <a href="inc/updateNews.php?id=<?=$row['IDnews']?>">Edit</a> </td>
                </tr>
            </table>
          </div>
            <?php
    }
?>
                <!--  End of Update list table   +++++++++++++++++++++++ -->
    </div>
