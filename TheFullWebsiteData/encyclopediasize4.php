<html>
<head>
	<title>Coursework1</title>
	<link rel="stylesheet" Type="text/css" href="encyclopediasize4style.css">
	<script src="indexpage.js"></script>
	<?php include 'databaselogin.php'; ?>
</head>

<body>

<!-- Main naivgation menu -->
<ul class="topnav">
	<li><a href="index.php">HOME</a></li>
	<li><a href="introduction.php">INTRODUCTION</a></li>
	<li><a href="top20.php">TOP 20</a></li>
	<li><a href="encyclopedia.php">ENCYCLOPEDIA</a></li>
	<li><a href="timeline.php">TIMELINE</a></li>
</ul>
	
<!-- Side navigation menu -->
<div class="navbar">
&nbsp;&nbsp;&nbsp;Interesting Dinosaurs:<br><br>

<?php

	$infotemp = mysql_query("SELECT * FROM `table 1`");
	$temp = 0;
	while ($row = mysql_fetch_array($infotemp)) {
			
			$temp = $temp + 1;
	}
	
	$a = rand ( 0 , $temp );
	
	$count = mysql_query("SELECT * FROM `table 1` WHERE Id = $a ");
	
	while ($row4 = mysql_fetch_array($count)) {
			
			$realcount = $row4{'Id'};
	}
	
	$image = "DinosaurData/$realcount.jpg";  
	$width = 200;
	$height = 150;
	
	echo '<img src="'.$image.'" style="margin-left: 16px;width:'.$width.'px;height:'.$height.'px;">';

	$countagain = mysql_query("SELECT * FROM `table 1` WHERE Id = $a ");
	
	while ($row2 = mysql_fetch_array($countagain)) {
			echo '&nbsp;'.'<a href="DinosaurData/'.$row2{'Link'}.'">'.$row2{'Name'}.'</a><br><br><br>';
	}
	
	echo "&nbsp;&nbsp;Current Top Dino List:<br><br>";
	
	$top10 = mysql_query("SELECT * FROM `table 1` ORDER BY `table 1`.`Countnumber` DESC LIMIT 0,10");
	
	while ($row3 = mysql_fetch_array($top10)) {
			echo '&nbsp;'.'<a href="DinosaurData/'.$row3{'Link'}.'">'.$row3{'Name'}.'</a><br>';
	}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
	<li><a href="http://www.wikipedia.org/wiki/Dinosaur">Wiki Dinosaurs</a></li>
	<li><a href="http://moodle.nottingham.ac.uk/">Moodle</a></li>
	<li><a href="http://www.google.com">Google</a></li>
</div>

<ul class="sortbar">
	<li><a href="encyclopedia.php">NAME</a></li>
	<li><a href="encyclopediaperiod.php">PERIOD</a></li>
	<li><a href="encyclopediadiet.php">DIET</a></li>
	<li><a href="encyclopediasize.php">SIZE</a></li>
</ul>

<ul id="namesort">
	<li><a href="encyclopediasize.php">0 to 5m</a></li>
	<li><a href="encyclopediasize2.php">5.1 to 10m</a></li>
	<li><a href="encyclopediasize3.php">10.1 to 15m</a></li>
	<li><a href="encyclopediasize4.php">15.1 and above</a></li>
</ul>


<!-- Main content -->
<h1> <br>&nbsp;&nbsp;&nbsp;Dinopedia</h1>


<p> <div class="mainbackground"> <br> </div>
	
	<div class="maintext"><span style="color: #003366"><i><b>Dino Encyclopedia</b></i></span><br><br>
	<span style="font-size:0.5em">Select a type to sort dinosaurs by:
	</span>
	</div>
</p>

<p> <div id="currentbackground">
	</div>
	
</p>

<p> <div class="dinonames">
	<?php 
	
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM `table 1` WHERE Length > 15  LIMIT 0,60");
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
			echo '<a href="DinosaurData/'.$row{'Link'}.'">'.$row{'Name'}.'</a><br>';
	}
	?>
	</div>
	
	
	
	
<!-- Sign and date the page. -->
<p><address> Made 14 March 2014
</address></p>



</body>
</html>