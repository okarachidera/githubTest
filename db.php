<?php

//localhost
//user
//password
//db
global $con;
$con = mysqli_connect("localhost","root","","hoteldb");
if (!$con){
	echo 'Wrong connection';
}


?>