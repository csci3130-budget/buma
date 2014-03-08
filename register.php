<?php

include_once dirname(__FILE__) . '/config.php';

?>
<script language=JavaScript>
		function InputCheck(RegForm)
		{
		var passwordcheck=
		/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
		
		if (RegForm.email.value == "")
		{
			alert("Email can not be empty!");
			RegForm.email.focus();
			return (false);
		}
		//1 UPcace have one lower, comebine with digits allows symbols, no spaces
			if (RegForm.user_id.value == "" || RegForm.user_id.value.length < 6)
		{
			alert("Account name is empty or less than 6");
			RegForm.user_id.focus();
			return (false);
		}
			if (RegForm.username.value == "")
		{
			alert("Username is empty!");
			RegForm.username.focus();
			return (false);
		}
		if (RegForm.password.value == "")
		{
			alert("Password is empty");
			RegForm.password.focus();
			return (false);
		}
		
		if (RegForm.password.value.match(passwordcheck) )
		{
			
		}
		else
		{
			alert("Password should be 6-16 digits contain at least one lowercase letter, one uppercase letter, one numeric digit");
			RegForm.password.focus();
			return (false);
		}
		if (RegForm.repass.value != RegForm.password.value)
		{
			alert("Passwords not match!");
			RegForm.repass.focus();
			return (false);
		}
		if (document.getElementById("agreement").checked==false)
			alert("Please accept the user agreement");
			return (false);
		}
</script>

	<!--This is the new sign up box -->
	
		<div class="widget-body">
			<h2 class="form-signin-heading"> New User Registration</h2>
			<h4>Enter your details to begin:</h4>
			<form id="register_form" role="form" action="register_post.php" onSubmit="return InputCheck(this)">
				 <fieldset>
					<input type="email" class="form-control" 	id="email"		name="email" 	placeholder="Email"  autofocus/>
					<input type="text" class="form-control"  	id="user_id"	name="user_id"	placeholder="Your account name(at least 6 digits)"/>
					<input type="text" class="form-control"  	id="username" 	name="username" placeholder="Name"/>
					<input type="password" class="form-control" id="password" 	name="password"	placeholder="Password(at least 6 digits)"/>
					<input type="password" class="form-control" id="repass" 	name="repass"	placeholder="Repeat password"/>
					
				<label class="checkbox checkbox-control">
					<input type="checkbox" id="agreement">I accept the <a href="BUMA User Agreement.pdf">User Agreement</a>
				</label>			
					<button type="reset" onclick="reset()" class="btn btn-lg btn-block">Reset</button>
					<button id="register_form_buttom" class="btn btn-lg btn-primary btn-block btn-success">Register</button>				
				</fieldset>			
				<a href="login">Back to login</a>
		
			</form>
		</div>


		


