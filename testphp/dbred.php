<?php 
include 'connect.php';
$sql = "SELECT * FROM items order by id DESC";
$result=mysqli_query($con,$sql);
if ($result == false) {
	echo("sorry you have error");
}else{

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


}

 ?>