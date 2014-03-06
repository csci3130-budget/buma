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
			
		<!--login box-->	
	<div id="login" class="visible widget-box no-border">
		<form class="form-signin" role="form">
        <h2 class="form-signin-heading">Welcome to BUBA</h2>
        <input type="text" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox checkbox-control">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
		
       <a href="forgot.php">
	   <button type="button" class="btn btn-link forgot-control">Forgot Password</button>
	   </a>
	   
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
		
		
		<a href="register.php">
		<button class="btn btn-default btm-new-account" type="button">Create New Account</button></a>
      </form>	
	</div>
	
	
		</div>
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
		function show_box(id) {
		$('.widget-box.visible').removeClass('visible');
		$('#'+id).addClass('visible');
		}
		</script>
		
	
		<script type="text/javascript">
		var vglnk = vglnk || 
		{
		api_url: '//api.viglink.com/api', 
		key: '0dff9ade2d1125af6c910069b6d6e155', reaffiliate: false
		};
		</script>
	
		<script type="text/javascript" async="" src="./BUMA_files/vglnk.js">
		</script>

    </body>
</html>
