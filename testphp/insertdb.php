<?php

include 'connect.php';


if (isset($_POST['GO'])) {

	$username=$_POST['username'];

	$Password=$_POST['Password'];


$Query="INSERT INTO items (username,Password)VALUES('".$username."' , '".$Password." ')";

$result=mysqli_query($con,$Query);

if ($result == false) {
	
	echo("sorry you have error");
	
}else{

	header("Location:dbred.php");
}

}


?>



<form action=" " method="post">
	
<input type="text" name="username">

</br>

</br>

<input type="text" name="Password">

<input type="submit" name="GO" value="go">

</form>