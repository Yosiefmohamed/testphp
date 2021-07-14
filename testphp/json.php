<?php

include 'connect.php';

echo "<h1>Json Part # 1 by array defult</h1>";

$arr=array("Yosief","Developer Sostware","Ethical Hacker",1);

echo print_r($arr);

echo"</br>";
echo"</br>";
echo"</br>";

echo json_encode($arr);

echo"</br>";
echo"</br>";
echo"</br>";

echo "<h1>Json Part # 2 key & value</h1>";

$array=array(

"name:" =>"Yosief",
"age:" =>19,
"year" =>2002,
"home:" =>"iraq",


);

echo json_encode($array);

echo"</br>";
echo"</br>";
echo"</br>";

echo print_r($array);

echo"</br>";
echo"</br>";
echo"</br>";

echo "<h1>Json Part # 3 by class</h1>";


/**
 * 
 */
class car{

public $name;

public $age;

public $car;

}

$myinfo =  new car();

$myinfo->name="Yosief";

$myinfo->age=19;

$myinfo->car="bmw";

echo json_encode($myinfo);


echo"</br>";
echo"</br>";
echo"</br>";

echo "<h1>Json Part # 4 by database</h1>";



$sql = "SELECT * FROM items order by id DESC";
$result=mysqli_query($con,$sql);
if ($result == false) {
	echo("sorry you have error");
}else{

$arr=array();

while ($row=mysqli_fetch_array($result)) {

$arr[]=$row;

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

echo json_encode($arr);

}


?>













