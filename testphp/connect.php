<?php

$host="Localhost";

$user='root';

$Pass='';

$dbs='try';

$con=mysqli_connect($host,$user,$Pass,$dbs);

if ($con == true) {
	
	// Print("Database is Connect");

}else{

echo("Database not Connect");

}

?>