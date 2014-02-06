<!--<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Ruipeng">
        <meta name="description" content="The website for Assignment1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, , user-scalable=no">
        <title>BUMA</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/format.css" rel="stylesheet" />-->
		<link href="css/ace.min.css" rel="stylesheet"/>
		<link href="css/font-awesome.min.css" rel="stylesheet" />
			
		<link rel="stylesheet" href="css/ace-responsive.min.css" />
		<link rel="stylesheet" href="css/ace-skins.min.css" />
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
	  function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Budget', 'Used'],
          ['January',  1000,      400],
          ['February',  1170,      460],
          ['March',  660,       1120],
          ['May',  1030,      50],
		  ['June',  1030,      40],
		  ['July',  800,      560],
		  ['August',  400,      540],
		  ['September',  500,      740],
		  ['October',  300,      640],
        ]);

        var options = {
          title: 'My year summary'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		
		var data2 = google.visualization.arrayToDataTable([
          ['Spent', 'MONEY'],
          ['Residence& housing',     500],
          ['Eat',      400],
          ['Hobbies',  500],
          ['Clothes', 20],
          ['Others',    60]
        ]);
		
        var option = {
          title: 'My Actual spent money'
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart'));
        chart2.draw(data2, option);
	  }
	  
     
     
		</script>
    <!--</head>

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
                        <li><a href="#Add">Add New Expense</a></li>
                        <li><a href="#Wish">Wish List</a></li>
                        <li><a href="#Stats">Statistics</a></li>
                      </ul>
                    </div>
                </div>
            </div>-->
			
			<!--stat begin here-->
			<div class="container">		
				<div id="page-content" class="clearfix">	
					<div class="page-header position-relative">
						<h1>Overview & Stats</h1>
					</div>	
				
				</div>	
		
			
		<!--Set up ס��-->
		<div class="right">
		<div class="clearfix" float:"center">
		<h3>Section</h3>
			<div class="infobox infobox-green">
				<div class="infobox-icon"><i class="icon-comments"></i></div>
					<div class="infobox-data">
						<span class="infobox-data-number">32</span>
						<span class="infobox-content">Residence& housing</span>
					</div>
			<div class="stat stat-success">8%</div>
			</div>

		<!--set up hobbies-->
			<div class="infobox infobox-black">
				<div class="infobox-icon"><i class="icon-comments"></i></div>
					<div class="infobox-data">
						<span class="infobox-data-number">80</span>
						<span class="infobox-content">Hobbies</span>
					</div>
			<div class="stat stat-success">40%</div>
			</div>
	 
		<!--Set up ʳ��-->
			<div class="infobox infobox-blue">
				<div class="infobox-icon"><i class="icon-twitter"></i></div>
					<div class="infobox-data">
						<span class="infobox-data-number">11</span>
						<span class="infobox-content">Food</span>
					</div>
				<div class="stat stat-success">+32%</div>
			</div>
	
		<!--Set up �·�-->
			<div class="infobox infobox-pink">
				<div class="infobox-icon"><i class="icon-shopping-cart"></i></div>
					<div class="infobox-data">
						<span class="infobox-data-number">8</span>
						<span class="infobox-content">Clothes</span>
					</div>
				<div class="stat stat-important">4%</div>
			</div>
			
		<!--Set up ����-->
			<div class="infobox infobox-red">
				<div class="infobox-icon"><i class="icon-beaker"></i></div>
					<div class="infobox-data">
						<span class="infobox-data-number">7</span>
						<span class="infobox-content">Others</span>
					</div>
				<div class="stat stat-important">9%</div>
			</div>
		<!--Set up ʣ�µ�-->
			<div class="infobox infobox-blue2">
				<div class="infobox-progress">
					<div id="remain" ><span class="percent">42</span>%
					</div>
				</div>
	
				<div class="infobox-data">
					<span class="infobox-text">Money used</span>
					<span class="infobox-content"><span class="approx">~</span> Budget remaining</span>
				</div>
			</div>
			
			</div><!--clearfix-->
			
			<br/>
			<h3>Pie chart</h3>
			<div class="hr hr32 hr-dotted"></div>
				 <div id="piechart" ></div>
				 
			<h3>Summary</h3>
			<div class="hr hr32 hr-dotted"></div>
				 <div id="chart_div"></div>
		</div>
				
			
	
		

<!--</div>

</body>
</html>-->