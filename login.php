 <?php


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   header("location: index.php?page=10");
    exit();
}
 ?>
 <div class="login-page full-screen sidebar-collapse">
 <div class="wrapper">
    <div class="page-header" style="background-image: url('assets/img/sections/login.png');"><!---->
      <div class="filter"></div>
      <div class="container" >
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
            <div class="card card-register" style="background-color: #ffffff; ">
              <h3 class="card-title">Welcome Cadet</h3>

               <div class="division">
              
                <center> <strong><div id="login_response"></div></strong></center> 
               
              </div>

              <form class="register-form" id="login_form" method="post">
                <label>Username</label>
                <input type="email" class="form-control no-border" placeholder="Username" id="login_mail" name="login_mail" style="background-color: #121212; ">
                <label>Password</label>
                <input type="password" class="form-control no-border" placeholder="Password" id="login_pwd" name="login_pwd" style="background-color: #121212; ">
                <input class="btn btn-danger btn-block btn-round" type="button" name="login_submit" id="login_submit" value="login">
              </form>

              <div class="demo-footer text-center">
                <a href="pages/Change.php" class="btn btn-link btn-danger">Forgot password?</a>
              </div>
            </div>
          </div>
        </div>
        <div class="demo-footer text-center">
          <h6> <a href="index.php?page=7" class="btn btn-link btn-danger">Need to create an account?</a></h6>
        </div>
      </div>
    </div>
  </div>
</div>