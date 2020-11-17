<?php

include('header.php');
?>
<body>
<form action="payment.php" method="POST"> 
<div style="width:500px; margin-left:auto;margin-right:auto; margin-top:40px;"> 
  <div class="form-group" >
    <label for="">Name: </label>
    <input type="text" class="form-control" id="" placeholder="Fullname" name="fullname">
  </div>
  <div class="form-group">
    <label for=""> Room Type</label>
    <select class="form-control" id="" name="type">
      <option value="Delux">Delux</option>
      <option value="Presidential">Presidential</option>
      <option value="Regular">Regular</option>
    </select>
  </div>
    <div class="form-group">
    <label for="">Number of Rooms</label>
    <select class="form-control" id="" name="room">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  
  <div class="form-group">
    <button class="btn btn-primary" type="submit" name="submit">Make Payment</button>
  
  </div>
</form>
</div>
</body>
</html>