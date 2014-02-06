<?php

include_once dirname(__FILE__) . '/config.php';

?><!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Ruipeng">
        <meta name="description" content="The website for Assignment1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, , user-scalable=no">
        <title>BUMA</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" >
        <link href="css/format.css" rel="stylesheet" type="text/css" media="all" />
 	    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
 	    <!--<script type="text/javascript" src="js/scripts.js"></script>-->
 	    <script type="text/javascript" src="js/event.js"></script>
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
                  <a class="navbar-brand" href="home"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;BUMA</a>
                </div>
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="add_expense"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add New Expense</a></li> <!--#Add-->
                    <li><a href="wish_list"><span class="glyphicon glyphicon-gift"></span>&nbsp;&nbsp;Wish List</a></li> <!--#Wish-->
                    <li><a href="statistics"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Statistics</a></li> <!--#Stats-->

                  </ul>
                </div>
            </div>
        </div>
        <div class="container"><?php
        
     	// Show current page
		echo include dirname(__FILE__);
		echo $file;
	    include dirname(__FILE__) . '/' . $file . '.php';
		//http://web.cs.dal.ca/~wegner/
        
        ?></div>
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
