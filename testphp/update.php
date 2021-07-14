<?php

include 'connect.php';

if (isset($_POST['update'])) {
$id=$_GET['id'];
$username=$_POST['username'];
$Password=$_POST['Password'];
$update="UPDATE items SET username ='$username' , Password='$Password'  where  id='".$id."'";
$result=mysqli_query($con,$update);
if ($result == true) {
header("Location:dbred.php");
}else{
	echo("sorry information has not update");
}

}

?>
<form action=" " method="post">	
username:<input type="text" name="username" placeholder ="username">
<input type="text" name="Password" placeholder ="Password">
<!-- <input type="hidden" name="id"> -->
<input type="submit" name="update" value="update">