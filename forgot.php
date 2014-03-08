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
	
			<!--forgot page-->
		<?php
			// display form if user has not clicked submit
			if (!isset($_POST["submit"]))
			{
		?>

  
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];>
			<div id="forgot" class="widget-box no-border">
				<h2 class="form-signin-heading">Retrieve Password</h2>
			<form>
				<input type="text" class="form-control" name="sender" placeholder="Enter your email and to receive instructions" required autofocus><br/>
				<input name="submit" class="btn btn-lg btn-primary btn-block btn-danger" type="submit" value="Send me!">
			</form>
			
			<div >
			<a href="index.php?file=login" >Back to login</a>
			</div>
			
			</div>
		</form>
		
  <?php 
	}
	else
		// the user has submitted the form
	{
	// Check if the "sender" input field is filled out
	if (isset($_POST["sender"]))
		{
		$sender = $_POST["sender"]; // sender
		$subject = "Get your new password";
		$message = "Please go to your email account to reset your password";
		//
		// send mail
		mail($sender,$subject,$message,"From: \n");
		echo "Email has been sent,Please check your email.";
    }
  }
?>

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
