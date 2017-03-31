<?php 

$merchandise = "merchandise-active";
include './includes/header.php'; 

$filename = "database.txt";

$data = file( $filename, FILE_IGNORE_NEW_LINES );
?>

<p>
	<a href="./add_new_post.php">Add new post</a>
</p>

<table style="margin:10px"> 
	<tr>
		<th>Item</th>
		<th>Description</th>
		<th>Price</th>
		<th>Image</th>
		<th>Size</th>
	</tr>
	
		
<?php

foreach($data as $single) {
	list( $item, $description, $price, $imageLink, $size )
              = explode( ",", $single );
	?>
	<tr>
	<td><?=$item?></td>
	<td><?=$description?></td>
	<td><?=$price?></td>
	<td><img src="./img/<?=$imageLink?>" /></td>
	<td><?=$size?></td>

	</tr>
	<?php
	}

?>
</table>

<?php
  include "./includes/footer.php";
?>


