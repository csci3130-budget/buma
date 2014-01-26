<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Ruipeng">
        <meta name="description" content="The website for Assignment1">
        <title>BUMA</title>
 		<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" >
		<link href="css/format.css" rel="stylesheet" type="text/css" media="all" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 	    <script type="text/javascript" src="js/scripts.js">
        </script>
    </head>

    <body>
    	<div id="wrap">
            <div id="header">
                <h1>BUMA</h1>
                <ul id="nav">
                	<li><a href="/" title="Home">Home</a></li>
                    <li><a href="login" title="Login">Login</a></li>
                	<li><a href="sign_in" title="Sign in">Sign in</a></li>
                	<li><a href="sign_up" title="Sign up">Sign up</a></li>
                	<li><a href="add_new" title="Add New Income/Outcome">Add New Income/Outcome</a></li>
                	<li><a href="wish_list" title="Wish List">Wish List</a></li>
                	<li><a href="statistics" title="Statistics">Statistics</a></li>
                </ul>
                <div class="clear"></div>
            </div><?php
            
            include "login.php";
            
            ?><div class="clear"></div>
            <div id="footer">CSCI3130</div>
        </div>
    </body>
</html>