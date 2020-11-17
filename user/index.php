<?php
session_start();
include("header.php");
include("../db.php");

if(isset($_SESSION['getuserID']) && !empty($_SESSION['getuserID'])){
	//echo $id = $_SESSION['getuserID'];
	 $id = $_SESSION['getuserID'];
	 
	 $sql = mysqli_query($con,"SELECT * FROM members WHERE memid = '$id'");
	 while($rows = mysqli_fetch_array($sql)){
		 $first = $rows['firstname'];
		  $last = $rows['lastname'];
		  
		   
	 }
	 $name = $first . ' '.$last;
	 
	 
}else{
	//echo 'error';
	header("location:../login.php");
}
?>
<div class="jumbotron" style="margin-top:15px;">
  <h1 class="display-4">Hello, <?php  echo $name; ?></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>