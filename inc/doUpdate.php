<?php
session_start();
include "connaddress.php";
function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

if (isset($_POST['update'])) {
			$IDnews=$row['IDnews'];
			$date=$row['date'];
			$title=$row['title'];
			$image=$row['image'];
			$author=$row['author'];
			$content=$row['content'];
$query = "UPDATE news SET
			IDnews='{$IDnews}',
			date='{$date}',
			title='{$title}',
			image='{$image}',
			author='{$author}',
			content='{$content}', WHERE IDnews='{$IDnews}'";
			$result = mysqli_query($conn, $query);
			redirect_to('../admin.php');
			}
	?>
