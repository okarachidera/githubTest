<?php
include("header.php");
?>

<style>
.jumbotron{
  text-align:center;
}
</style>
<body >
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <br>
    <h1 class="display-4">LOGIN</h1>
    <br>
  </div>
</div>


<div style="margin-left:auto;margin-right:auto; width:500px;margin-top:40px;">
  <form action="loginexec.php" method="POST">
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" name="email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" name="password">
      </div>
    </div>
  
    <div class="form-group row">
      <div class="col-sm-2">Checkbox</div>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck1">
          <label class="form-check-label" for="gridCheck1">
            Remember Email and Password
          </label>
        </div>
      </div>
    </div>
    <?php
    if(isset($_GET['error']) && !empty($_GET['error']))
    {
    $err = $_GET['error'];
    
    ?>
    <span class="text-danger">
    <?php
    if($err=='emptyfield'){
      echo 'Please all fields are required!';
    }else if($err=='wronglogindetails')
    {
      echo 'Opp! Wrong email or password!';
    }
    ?>
    </span>
    <?php } ?>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="btnSubmit">Sign in</button>
      </div>
    </div>
  </form>
</div>
</body>