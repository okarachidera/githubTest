<?php
include('header.php');
include('function.php');

if(isset($_POST['kk'])){
	$first = $_POST['fistname'];
	$last = $_POST['lastname'];
	$gen = $_POST['gender'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
    $date = date("Y-m-d h:m");
	
	signup($first,$last,$gen,$email,$pass,$date);
	
}

echo $first;

?>