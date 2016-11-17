<html>
<head>
	<title>Coursework1</title>
	<link rel="stylesheet" Type="text/css" href="individualdinostyle.css">
	<script src="../indexpage.js"></script>
	<script type="text/javascript" src="../jquerycode.js"></script>
	
	<?php include '../databaselogin.php'; ?>
	
	<script>
	
	var filename = <?php
  
	$fileid = basename(__FILE__, '.php');
	echo json_encode($fileid);
	
	?>;

	$(document).ready(function(){
		$("#whitestarbutton").click(function() { 
	
			document.getElementById("whitestarbutton").style.visibility = "hidden";
			document.getElementById("yellowstarbutton").style.visibility = "visible";
			document.getElementById("starlabel").innerHTML = "Dinosaur voted! Bonus Info Unlocked!";
			isDinoVoted = true;
			document.getElementById("notice").style.visibility = "hidden";
			
			 $.post('../updatedatabase.php',{id: filename});
			 
		
		});
		
	});
	</script>
</head>

<body onload="startselect()">

<!-- Main naivgation menu -->
<ul class="topnav">
	<li><a href="../index.php">HOME</a></li>
	<li><a href="../introduction.php">INTRODUCTION</a></li>
	<li><a href="../top20.php">TOP 20</a></li>
	<li><a href="../encyclopedia.php">ENCYCLOPEDIA</a></li>
	<li><a href="../timeline.php">TIMELINE</a></li>
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
	
	$image = "$realcount.jpg";  
	$width = 200;
	$height = 150;
	
	echo '<img src="'.$image.'" style="margin-left: 16px;width:'.$width.'px;height:'.$height.'px;">';

	$countagain = mysql_query("SELECT * FROM `table 1` WHERE Id = $a ");
	
	while ($row2 = mysql_fetch_array($countagain)) {
			echo '&nbsp;'.'<a href="'.$row2{'Link'}.'">'.$row2{'Name'}.'</a><br><br><br>';
	}
	
	echo "&nbsp;&nbsp;Current Top Dino List:<br><br>";
	
	$top10 = mysql_query("SELECT * FROM `table 1` ORDER BY `table 1`.`Countnumber` DESC LIMIT 0,10");
	
	while ($row3 = mysql_fetch_array($top10)) {
			echo '&nbsp;'.'<a href="'.$row3{'Link'}.'">'.$row3{'Name'}.'</a><br>';
	}
?>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
	<li><a href="http://www.wikipedia.org/wiki/Dinosaur">Wiki Dinosaurs</a></li>
	<li><a href="http://moodle.nottingham.ac.uk/">Moodle</a></li>
	<li><a href="http://www.google.com">Google</a></li>
</div>


<ul class="sortbar">
	<li onmousedown="sectionselector('blue')">BASIC INFO</li>
	<li onmousedown="sectionselector('green')">LIVING PERIOD</li>
	<li onmousedown="sectionselector('red')">BONUS INFO</li>
</ul>


<!-- Main content -->
<h1> <br>&nbsp;&nbsp;&nbsp;Dinopedia</h1>

<p> <div class="mainbackground"> <br> </div>
	
	<div class="maintext"><span style="color: #003366"><i><b>
	<?php 
  
	$fileid = basename(__FILE__, '.php');
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM `table 1` WHERE Id = $fileid");
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
			echo $row{'Name'}.'</a><br>';
	}
	?>
	
	</b></i></span>
	</div>
</p>

<p> <div class="mainpicture">
	<?php

	$fileid = basename(__FILE__, '.php');
	
	$image = "$fileid.jpg";  
	$width = 700;
	$height = 400;
	echo '<img src="'.$image.'" style="width:'.$width.'px;height:'.$height.'px;">';

	?>

	</div>
</p>

<p>	<div id="whitestarbutton">
	</div>
	<div id="yellowstarbutton">
	</div>
	<div id="starlabel">
	Click on the white star to vote this dinosaur and view its bonus info!
	</div>
	
</p>

<p> <div id="bluebackground">
	</div>
	<div id="greenbackground">
	</div>
	<div id="redbackground">
	</div>
	
	<div id="infotextblue">
	<?php

	$fileid = basename(__FILE__, '.php');
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM `table 1` WHERE Id = $fileid");
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
			echo 'Name: '.$row{'Name'}.'<br><br>Diet: '.$row{'Diet'};
	}
	?>
	</div>
	
	<div id="infotextgreen">
	<?php

	$fileid = basename(__FILE__, '.php');
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM `table 1` WHERE Id = $fileid");
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
			echo 'Living Period: '.$row{'LivingPeriod'}.' Million Years Ago<br><br>Time Period: '.$row{'TimePeriod'};
	}
	?>
	</div>
	
	<div id="infotextred">
	<?php

	$fileid = basename(__FILE__, '.php');
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM `table 1` WHERE Id = $fileid");
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
			echo 'Size: '.$row{'Length'}.' meters<br><br>Found At: '.$row{'FoundAt'};
	}
	?>
	</div>
</p>

<p>	<div id="notice">
	Sorry! Dinosaur not voted. Please vote this dinosaur to view its bonus info!
	</div>
</p>

<p>	<div id="similardinosaurs">
	&nbsp;Similar dinosaurs you may like:<br>
	<?php
	$fileid = basename(__FILE__, '.php');
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM `table 1` WHERE Id = $fileid");
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
			$diet = $row{'Diet'};
			$length = $row{'Length'};
			$timeperiod = $row{'TimePeriod'};
	}
	
	$lowerlength = $length - 2.5;
	$upperlength = $length + 2.5;
	
	$relatedresult = mysql_query("SELECT * FROM `table 1` WHERE Diet = '$diet' AND TimePeriod = '$timeperiod' AND Length BETWEEN '$lowerlength' AND '$upperlength' AND Id != $fileid LIMIT 0,5"); 
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($relatedresult)) {
			echo '<a href="'.$row{'Link'}.'">'.$row{'Name'}.'</a><br>';
	}
	?>
	</div>
	
</p>
	
<!-- Sign and date the page. -->
<p><address> Made 14 March 2014
</address></p>



</body>
</html>