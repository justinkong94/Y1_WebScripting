<html>
<head>
	<title>Coursework1</title>
	<link rel="stylesheet" Type="text/css" href="top20style.css">
	
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<li><a href="http://www.wikipedia.org/wiki/Dinosaur">Wiki Dinosaurs</a></li>
	<li><a href="http://moodle.nottingham.ac.uk/">Moodle</a></li>
	<li><a href="http://www.google.com">Google</a></li>
</div>



<!-- Main content -->
<h1> <br>&nbsp;&nbsp;&nbsp;Dinopedia</h1>


<p> <div class="mainbackground"> <br> </div>
	
	<div class="maintext"><span style="color: #003366"><i><b>Top 20</b></i></span><br><br>
	</div>
</p>

<p>	<div class="mainborder1">
	</div>
	<div class="mainborder2">
	</div>
	<div class="mainborder3">
	</div>
	<div class="mainborder4">
	</div>
	<div class="mainborder5">
	</div>
	<div class="mainborder6">
	</div>
	<div class="mainborder7">
	</div>
	<div class="mainborder8">
	</div>
	<div class="mainborder9">
	</div>
	<div class="mainborder10">
	</div>
	<div class="mainborder11">
	</div>
	<div class="mainborder12">
	</div>
	<div class="mainborder13">
	</div>
	<div class="mainborder14">
	</div>
	<div class="mainborder15">
	</div>
	<div class="mainborder16">
	</div>
	<div class="mainborder17">
	</div>
	<div class="mainborder18">
	</div>
	<div class="mainborder19">
	</div>
	<div class="mainborder20">
	</div>

	<div class="numbersystem">
	1<br><br>2<br><br>3<br><br>4<br><br>5<br><br>6<br><br>7<br><br>
	8<br><br>9<br><br>10<br><br>11<br><br>12<br><br>13<br><br>14<br><br>
	15<br><br>16<br><br>17<br><br>18<br><br>19<br><br>20
	</div>
		
</p>

<p>	<div class="listoutput1">
	<?php
	
	$top20list1 = mysql_query("SELECT * FROM `table 1` ORDER BY `table 1`.`Countnumber` DESC LIMIT 0,8");

	while ($row4 = mysql_fetch_array($top20list1)) {
			echo $row4{'Name'}.'<br><br><br>';
	}
	?>
	</div>
	
	<div class="listoutput2">
	<?php
	
	$top20list2 = mysql_query("SELECT * FROM `table 1` ORDER BY `table 1`.`Countnumber` DESC LIMIT 8,8");
	
	while ($row5 = mysql_fetch_array($top20list2)) {
			echo $row5{'Name'}.'<br><br><br>';
	}
	?>
	</div>
	
	<div class="listoutput3">
	<?php
	
	$top20list3 = mysql_query("SELECT * FROM `table 1` ORDER BY `table 1`.`Countnumber` DESC LIMIT 16,4");
	
	while ($row6 = mysql_fetch_array($top20list3)) {
			echo $row6{'Name'}.'<br><br><br>';
	}
	?>
	</div>

	<div class="voteslistoutput1">
	<?php
	
	$top20voteslist1 = mysql_query("SELECT * FROM `table 1` ORDER BY `table 1`.`Countnumber` DESC LIMIT 0,20");
	
	while ($listrow1 = mysql_fetch_array($top20voteslist1)) {
			echo 'Votes: '.$listrow1{'Countnumber'}.'<br><br><br><br>';
	}
	?>
	</div>
	
	<div class="dinosaurlinkbutton">
	<?php
	
	$top20linkslist1 = mysql_query("SELECT * FROM `table 1` ORDER BY `table 1`.`Countnumber` DESC LIMIT 0,20");
	
	while ($linkslistrow1 = mysql_fetch_array($top20linkslist1)) {
			echo '<a href="DinosaurData/'.$linkslistrow1{'Link'}.'">'.'GO</a><br><br><br><br>';
	}
	?>
	</div>

</p>
	
<!-- Sign and date the page. -->
<p><address> Made 14 March 2014
</address></p>



</body>
</html>