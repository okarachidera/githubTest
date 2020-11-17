<?php
session_start();
include('db.php');
if(isset($_POST['btnSubmit'])){
	//echo 'Great';
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(empty($email) || empty($password)){
		header("location:login.php?error=emptyfield");
	}
	//sql query
	$sql = mysqli_query($con,"SELECT * FROM members WHERE email='$email' AND password = '$password'");
	//check affected rows
	$num = mysqli_num_rows($sql);
	if($num == 1)
	{
		//echo 'record found';
		//GET user identity
		while($row = mysqli_fetch_array($sql))
		{
			 //echo $userID = $row['memid'];
			 $userID = $row['memid'];
			 //monitor or track user activities
			 $_SESSION['getuserID'] = $userID;
			 header("location:User/index.php");
		}
	}else{
		header("location:login.php?error=wronglogindetails");
	}
	
}

?>