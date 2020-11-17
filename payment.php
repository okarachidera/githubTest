<html>


<?php
include('header.php');
include('function.php');
if(isset($_POST['submit'])){
	
	//echo 'Thanks';
	 $type = $_POST['type'];
	$noofroom = $_POST['room'];
	$name = $_POST['fullname'];
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Room type</th>
      <th scope="col">No of Room</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $name; ?></td>
      <td><?php echo $type; ?></td>
      <td><?php echo $noofroom; ?></td>
      <td>=N=<?php echo  hotel($type,$noofroom); ?></td>
    </tr>

  </tbody>
</table>
<?php
}else{
	header('location:bill.php');
}

?>
