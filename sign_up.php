<link rel="stylesheet" href="css/signup.css">

<form id="signup_Form" class="form-signin" method="POST" action="action/signup_action.php" enctype="multipart/form-data" runat="server">
<div class="container form-wrap">
<h3 class="text-center">Sign Up</h3>
<p class="text-center">Are you a contestant? Sign up here</p>
<div class="row">
<div class="col-sm-12">
<div class="alert alert-danger" role="alert" id="ack" style="display:none">
			  An error got thrown here
			</div>
</div>			
<div class="col-sm-6">

        
        <!--<div class="alert alert-danger"  role="alert" style="display: none">ERRRRRORRRR!</div>-->

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>        
        <label for="inputdept" class="sr-only">Password</label>
        <input type="text" id="inputdept" class="form-control" placeholder="Department" name="dept" required>
        
      <label for="inputPassword" class="sr-only">sex</label>
        <select class="form-control" name="sex">
        	<option value="m">Male</option>
        	<option value="f">Female</option>
        </select>
          
      <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        
        
     

    </div> <!-- /container -->
    
	<div class="col-sm-6">
		
		<input type="text" id="" class="form-control" placeholder="Full Name" name="name" required>
		<select name="level" class="form-control">
		<option>100L</option>
		<option>200L</option>
		<option>300L</option>
		<option>400L</option>
		<option>500L</option>
		</select>
		
		<select name="year" class="form-control">
		<?php
			$yr= 2019;
			while ($yr < 2030){
				echo "<option value=\"$yr\">$yr</option>";
				
				$yr++;
			}
			?>			
		</select>
		
		<small class="mt-5">Select your Picture</small>
        <input type="file" id="inputpix" name="ppix" class="form-control-file mb-3">
     
		
	</div> 
   		<input type="submit" class="btn btn-lg btn-danger btn-block mt-4" id="signup-btn" value="Sign Up" name="reg" />
    
        <div class="btn btn-lg btn-danger btn-block fm-act-btn mt-4" id="loading" style="display: none;"><span class="glyphicon"> <img src="img/spiner.png" width="28"> Wait..</span></div>
        
        
      <!--  <input type="submit" name="reg" value="Sign Up" class="btn btn-danger btn-lg register-btn" id="sub" style="width: 250px; margin:auto; margin-left: 100px; margin-top: 40px;" /> 
 <button class="btn btn-lg btn-danger btn-block" type="submit" id="loading" disabled style="width: 250px; margin:auto; margin-left: 100px; margin-top: 40px; display: none;"><span class="glyphicon"> <img src="img/spinner9.png" width="28"> Wait..</span></button>-->

   
 <small class="text-center mt-2 mr-auto  ml-auto">Already Have an Account?<a href="sign_up.php" > Sign in</a></small>
 </div>
 </div>
	
 </form>