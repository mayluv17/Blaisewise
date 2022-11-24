<?php if(isset($_SESSION["uid"])){
header("location: dashboard");
} 

?>


<link rel="stylesheet" href="css/login.css">

<div class="container">
<div class="row">
<div class="col-md-4 ml-auto mr-auto form-wrap" style="">

<h3 class="text-center">Sign In</h3>
<p class="text-center  mb-4">Are you a contestant? Sign in here</p>
<div class="alert alert-danger" role="alert" id="ack" style="display:none">
			</div>

      <form id="login_form" class="form-signin" method="POST" action="action/login_action.php" >

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address or Usename" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
        <div class="checkbox">
          <label class="mt-1">
            <input type="checkbox" value="remember-me"> Remember me 
          </label>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" id="signIn" value="Sign in">
        <div class="btn btn-lg btn-danger btn-block fm-act-btn" id="loading" style="display: none;"><span class="glyphicon"> <img src="img/spiner.png" width="22"> &nbsp; Wait..</span></div>
        
        <p class="text-center mt-3 ">Don't have an account? <a href="sign_up.php" class="mr-auto ml-auto ">Register an Account</a></p>
      </form>

    </div> <!-- /container -->
 </div>
 </div>
 
