<?php

include 'connect.php';

$id=$_GET['id'];

$delete="DELETE FROM items WHERE id=".$_GET['id'];


$result=mysqli_query($con,$delete);


if ($result) {
	echo("delete");
}else{

	echo("sorry not Delete");
}


?>