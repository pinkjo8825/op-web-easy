<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:lightgrey">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span> Car showroom lnw </h3>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="username"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group ">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>Login </button>
            <div class="form-group text-center ">
              <div class="col-sm-12 ">
                </div>
                <a href="register.php" class="btn btn-primary" id="btn-register">
                <span class="glyphicon glyphicon-user"></span> Register</button>
                </a>
              </div>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>