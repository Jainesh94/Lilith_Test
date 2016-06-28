<?php

$selectImages = "SELECT * FROM images";

$selectImages = mysqli_query($conn, $selectImages);

$counter = 0;

while ($row = mysqli_fetch_assoc($selectImages)) {
		echo '
				<a href="#">
					<img class="gridBox" src="images/'.$row['image'].'" alt="'.$row['image_name'].'">
				</a>
		'; 
}

?>

