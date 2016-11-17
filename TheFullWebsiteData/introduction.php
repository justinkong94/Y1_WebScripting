<html>
<head>
	<title>Coursework1</title>
	<link rel="stylesheet" Type="text/css" href="introductionstyle.css">
	
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
<br><br>
	<li><a href="http://www.wikipedia.org/wiki/Dinosaur">Wiki Dinosaurs</a></li>
	<li><a href="http://moodle.nottingham.ac.uk/">Moodle</a></li>
	<li><a href="http://www.google.com">Google</a></li>
</div>



<!-- Main content -->
<h1> <br>&nbsp;&nbsp;&nbsp;Dinopedia</h1>


<p> <div class="mainbackground"> <br> </div>
	
	<div class="maintext"><span style="color: #003366"><i><b>Introduction</b></i></span><br><br>
	<span style="font-size:0.5em"><b>The</b> word "dinosaur" comes from the ancient Greek word of "deinos"(terrible) and "sauros"(lizard). 
	<b><i>Dinosaurs</i></b> are a diverse
	<br>group of animals which first appeared during the Triassic period, 231.4 million years ago and lived alongside marine reptiles 
	<br>and flying reptiles. They were the dominant terrestrial vertebrates for 135 million years, from the beginning of the Jurassic
	<br>period until the end of the Cretaceous period. At this period, a huge extinction event led to the extinction of most dinosaur 
	<br>groups at the close of the Mesozoic Era.
	</span>
	</div>
	
	<div class="dinosaurtimeline">
	<img src="dinosaurtimeline.jpg" width="600" height="200">
	</div>
	
</p>

<p><div class="maintext2"><b>Scientists</b> first began studying dinosaurs during the 1820s, when they discovered the bones of a large land reptile they dubbed a
	<br>Megalosaurus ("big lizard") buried in the English countryside. Since then, dinosaur fossils have been 
	<br>found all over the world and studied by paleontologists to find out more about the many different types 
	<br>of these creatures that existed. Despite the fact that dinosaurs no longer walk the Earth as they did 
	<br>during the Mesozoic era, unmistakable traces of these enormous reptiles can be identified in their 
	<br>modern-day descendants: birds. Dinosaurs also live on in the study of paleontology, and new information 
	<br>about them is constantly being uncovered.
	</div>
	
	<div class="megalosaurus">
	<img src="megalosaurus.jpg" width="200" height="250">
	</div>
</p>
	
<!-- Sign and date the page. -->
<p><address> Made 14 March 2014
</address></p>



</body>
</html>