<?php
if(isset($_COOKIE['name'])){
	$getname = $_COOKIE['name'];
	echo 'You are welcome: '.$getname;
}else{
	echo 'You are welcome to our website';
}
?>