<?php
include_once('db.php');

function hotel($love,$gamma)
{
	if($love=='Delux'){
		$price = 15000;
		$payable = $price * $gamma;
	}else if($love == 'Presidential')
	{
		$price = 10000;
		$payable = $price * $gamma;
	}else{
		$price = 5000;
		$payable = $price * $gamma;
	}
	return $payable;
	}

function signup($f,$l,$g,$e,$p,$d){
	global $con;
	$sql =  mysqli_query($con, "INSERT INTO members(firstname,lastname,gender,email,password,created)VALUES('$f','$l','$g','$e','$p','$d')");

return $sql;
}
 

?>