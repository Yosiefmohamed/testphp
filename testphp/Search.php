<?php 
include 'connect.php';

// Start search for name 

if (isset($_POST['search'])) {

@$username=$_POST['username'];

$sql = "SELECT * FROM items where username like '%".$username." %'" ;

$result=mysqli_query($con,$sql);


if ($result == false) {

	echo("sorry you have error");

// Tag Start else Statment

}else{


   
 // start red the infomation from Database   

while ($row=mysqli_fetch_array($result)) {
    echo '<li> id:'.$row['id']. '</li>'; 
	echo '</br>';
	echo '<li>username:'.$row['username']. '</li>'; 
	echo '</br>'; 
    echo '<li>Password:'.$row['Password'].'</li>';
    echo '</br>'; 
    echo '<h1><a href="Delete.php?id="'.$row['id'].'" ">Delete old dont use</a></h1>';
    echo '</br>';
    echo '<h1><a href="Delete.php?id='.$row['id'].'">Delete2</a></h1>';
    echo '</br>'; 
    echo '<h1><a href="update.php?id='.$row['id'].'">update</a></h1>';
}

// End red the infomation from Database


}

// Tag else Statment

}

// End search for name

 ?>



 <!DOCTYPE html>
 <html>
 <head>
<meta charset="utf-8">
<title>search page</title>
 </head>
 <body>
<form  action="" method="post">
<input type="text" name="search" placeholder="search">
</br>
</br>
<input type="submit" name="search" placeholder="search now">
</form>

 </body>
 </html>