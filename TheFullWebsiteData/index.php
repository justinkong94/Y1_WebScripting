<html>
<head>
	<title>Coursework1</title>
	<link rel="stylesheet" Type="text/css" href="indexstyle.css">
	<script src="indexpage.js"></script>
	<script type="text/javascript" src="jquerycode.js"></script>
	
	<script> 
	$(document).ready(function()
	{
		$("#maintimeline1").hover(function()
		{
			$("#triassicinfo").fadeTo(900, 0.8);
			},
			function(){
			$("#triassicinfo").fadeTo( 800, 0 );
		});
		
		$("#maintimeline2").hover(function()
		{
			$("#jurassicinfo").fadeTo(900, 0.8);
			},
			function(){
			$("#jurassicinfo").fadeTo( 800, 0 );
		});
		
		$("#maintimeline3").hover(function()
		{
			$("#cretaceousinfo").fadeTo(900, 0.8);
			},
			function(){
			$("#cretaceousinfo").fadeTo( 800, 0 );
		});
		
		
	});
	</script>
	
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

<!-- Main page Timeline list -->
<ul class="maintimeline">
	<li id="maintimeline1">Triassic</li>
	<li id="maintimeline2">Jurassic</li>
	<li id="maintimeline3">Cretaceous</li>
</ul>

<!-- Main content -->
<h1> <br>&nbsp;&nbsp;&nbsp;Dinopedia</h1>


<p> <div class="mainbackground"> <br> </div>

	<div class="mainpicture"> 
	<img src="dinosaurheader.jpg" width="1000" height="500">
	</div>
	
	<div class="maintext"><span style="color: #003366"><i><b>Welcome!</b></i></span><br><br>
	<span style="font-size:0.5em">Hover over the time periods for more information.
	<br><br><br>DINOSAUR TIME PERIODS:</span>
	</div>
	
	<div id="triassicinfo"><br>The Triassic began after the worst mass extinction ever, at the end of the
	Permian. Life on Earth took a while to recover and diversify. The Triassic was characterised by heat,
	vast deserts and warm seas. Even the polar regions were warm, so lush forests grew there. However, the
	lack of other life, coupled with the period's particular environmental conditions, opened up some
	evolutionary opportunities. As a result, the very first mammals and dinosaurs evolved. During this time,
	the giant supercontinent of Pangaea began to break apart. The period ended as it had begun, with an
	extinction event that wiped out many species.<br><br>
	<hr><br>
	
	Began: <b>Permian mass extinction</b><br>
	&emsp;&emsp;&emsp;&nbsp;<i>248 million years ago</i><br><br>
	
	Ended: <b>Triassic-Jurassic mass extinction</b><br>
	&emsp;&emsp;&emsp;&nbsp;<i>205 million years ago</i>
	</div>
	
	<div id="jurassicinfo"><br>The Jurassic began after the mass extinction event that ended the Triassic.
	Life, however, was quick to recover from this blow and the Jurassic eventually became host to the most
	diverse range of organisms that Earth had yet seen. Amongst them were the first birds and some of the
	dinosaurs. Continental break-up during this time gave rise to the sea that would eventually widen to
	become the Atlantic Ocean. The ocean floor that formed at this time is the oldest surviving on the 
	planet - all older ones having now been 'recycled' through plate tectonics.<br><br><br><br>
	<hr><br>
	
	Began: <b>Triassic-Jurassic mass extinction</b><br>
	&emsp;&emsp;&emsp;&nbsp;<i>205 million years ago</i><br><br>
	
	Ended: <i>142 million years ago</i>
	</div>
	
	<div id="cretaceousinfo"><br>The Cretaceous ended with the most famous mass extinction in history
	- the one that killed the dinosaurs. Prior to that, it was a warm period with no ice caps at the
	poles. Much of what we now know as dry land - such as southern England and the midwest of the USA
	- was underwater, since sea levels reached their highest ever during this time. The Atlantic Ocean
	grew much wider as North and South America drew apart from Europe and Africa. The Indian Ocean was
	formed at this time, and the island that was India began its journey north towards Asia.<br><br><br><br>
	<hr><br>
	
	Began: <i>142 million years ago</i><br><br><br>
	
	Ended: <b>Cretaceous-Tertiary extinction</b><br>
	&emsp;&emsp;&emsp;&nbsp;<i>65 million years ago</i>
	
	<b></b>
	</div>

</p>

<p>	<div id="picturetext">
	Age Of Dinosaurs
	</div>
</p>	


</p>


<!-- Sign and date the page. -->
<p><address> Made 14 March 2014
</address></p>



</body>
</html>