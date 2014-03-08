<?php
if (!ini_get('date.timezone')) {
	date_default_timezone_set('America/Anguilla');
}
include_once dirname(__FILE__) . '/config.php';

?><!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Ruipeng">
        <meta name="description" content="The website for Assignment1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, , user-scalable=no">
        <title>BUMA</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 	    <script type="text/javascript" src="js/event.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" >
        <link href="css/format.css" rel="stylesheet" type="text/css" media="all" />
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header"><?php
                
                    // Test if the user is logged
                    if ($user_id)
                        echo '<button type="button" name="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>';

                    ?><a class="navbar-brand" href="home"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;BUMA</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav"><?php
                        
                        // Test if the user is logged
                        if ($user_id)
                            echo '<li><p class="navbar-text" name="login-text">Logged in as ' . utf8_encode(ucfirst($_SESSION['user_name'])) . '</p></li>
                                  <li><a href="add_budget"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add New Budget</a></li> <!--#Add-->
                                  <li><a href="add_expense"><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Add New Expense</a></li> <!--#Add-->
                                  <li><a href="wish_list"><span class="glyphicon glyphicon-gift"></span>&nbsp;&nbsp;Wish List</a></li> <!--#Wish-->
                                  <li><a href="statistics"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Statistics</a></li> <!--#Stats-->
                                  <li><a href="logout"><span class="glyphicon glyphicon-logout"></span>&nbsp;&nbsp;Logout</a></li> <!--#Logout-->';
                    ?></ul>
                </div>
            </div>
        </div>
        <div class="container"><?php
        
			// Show current page
			include dirname(__FILE__) . '/' . $file . '.php';
        
        ?></div>
    </body>
</html>
