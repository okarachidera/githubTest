<?php

include("header.php");
echo '<h2>Mr Solomon is here</h2>';

//variabe

$name = "Adebayo";
echo 'My name is '.$name."<br><br>";

if(isset($_POST['sub'])){
	//echo 'Why did you click on me';
	$surname = $_POST['sname'];
	//VALIDATION
	if(!empty($surname)){
		
	?>
	<h2>Your name is <?php echo "
	<script>
	alert('Your name is  $surname')</script>" ;?></h2>
	<?php
	}else{
	$error =  'Kindly fill that form';}
}
?>

<form action="index.php" method="POST">
<label>Surname: </label><input type="text" name="sname"><span style="color:red;"><?php if(!empty($error)){echo $error; }?></span><br>
<input type="submit" name="sub" value="Send"/>
</form>