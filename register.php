<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Ruipeng">
        <meta name="description" content="The website for Assignment1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, , user-scalable=no">
        <title>BUMA</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" >
        <link href="css/format.css" rel="stylesheet" type="text/css" media="all" />
 	    <script type="text/javascript" src="js/scripts.js">
        </script>
		<script language=JavaScript>
		function InputCheck(RegForm)
		{
			if (RegForm.email.value == "")
		{
			alert("Email can not be empty!");
			RegForm.email.focus();
			return (false);
		}
			if (RegForm.user_id.value == "")
		{
			alert("Account name is empty!");
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
			alert("Password is empty!");
			RegForm.password.focus();
			return (false);
		}
		if (RegForm.repass.value != RegForm.password.value)
		{
			alert("Passwords not match!");
			RegForm.repass.focus();
			return (false);
		}
		}
	
	
		</script>
    </head>

    <body>
          	
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">BUBA</a>
                    </div>
                    <div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php?file=add_budget"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add New Budget</a></li> <!--#Add-->
							<li><a href="index.php?file=add_expense"><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Add New Expense</a></li> <!--#Add-->
							<li><a href="index.php?file=wish_list"><span class="glyphicon glyphicon-gift"></span>&nbsp;&nbsp;Wish List</a></li> <!--#Wish-->
							<li><a href="index.php?file=statistics"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Statistics</a></li> <!--#Stats-->
						</ul>
					</div><!--/.nav-collapse -->
                </div>
            </div>
            <div class="container">

	<!--This is the new sign up box -->
	<div id="signup" class="widget-box no-border">
		<div class="widget-body">
		
			<h2 class="form-signin-heading"> New User Registration</h2>
			<h4>Enter your details to begin:</h4>
			<form name="RegForm" method="post" action="reg.php" onSubmit="return InputCheck(this)">
				 <fieldset>
					<input type="email" class="form-control" 	id="email"		name="email" 	placeholder="Email"  autofocus/>
					<input type="text" class="form-control"  	id="user_id"	name="user_id"	placeholder="Your account name"/>
					<input type="text" class="form-control"  	id="username" 	name="name" 	placeholder="Name"/>
					<input type="password" class="form-control" id="password" 	name="password"	placeholder="Password"/>
					<input type="password" class="form-control" id="repass" 	name="repass"	placeholder="Repeat password"/>
					
				<label class="checkbox checkbox-control">
					<input type="checkbox" name="agreement">I accept the <a href="BUMA User Agreement.pdf">User Agreement</a>
				</label>			
					<button type="reset" onclick="reset()" class="btn btn-lg btn-block">Reset</button>
					<button class="btn btn-lg btn-primary btn-block btn-success">Register</button>				
				</fieldset>
			
			<a href="index.php?file=login">Back to login</a>
		
			</form>
			</div>
		</div>
		
		
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		
	
		<script type="text/javascript">
		var vglnk = vglnk || 
		{
		api_url: '//api.viglink.com/api', 
		key: '0dff9ade2d1125af6c910069b6d6e155', reaffiliate: false
		};
		function reset()
		{
		alert("I am an alert box!");
		}
		</script>
	
		<script type="text/javascript" async="" src="./BUMA_files/vglnk.js">
		</script>

    </body>
</html>
