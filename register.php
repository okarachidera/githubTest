<?php
include('header.php');
include('db.php');
?>
<form action="regexe.php" method="POST"> 
<div style="width:500px; margin-left:auto;margin-right:auto; margin-top:40px;"> 
  <div class="form-group" >
    <label for="">First Name: </label>
    <input type="text" class="form-control" id=""  name="fistname">
  </div>
   <div class="form-group" >
    <label for="">Last Name: </label>
    <input type="text" class="form-control" id=""  name="lastname">
  </div>
  <div class="form-group">
    <label for=""> Gender</label>
    <select class="form-control" id="" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      
    </select>
  </div>
    
  <div class="form-group" >
    <label for="">Email: </label>
    <input type="email" class="form-control" id="" name="email">
  </div>
  
  <div class="form-group" >
    <label for="">Password: </label>
    <input type="password" class="form-control" id=""  name="password">
  </div>
  
  <div class="form-group">
    <button class="btn btn-primary" type="submit" name="kk">Sign Up</button>
  
  </div>
</form>