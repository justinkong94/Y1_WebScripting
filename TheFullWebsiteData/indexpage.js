//index page
/////////////////////////////////////////
function togglevisible(id)
{
	if(id == "triassicinfo")
	{
		document.getElementById("triassicinfo").style.visibility = "visible";

	}
	else if(id == "jurassicinfo")
	{
		document.getElementById("jurassicinfo").style.visibility = "visible";
	}
	else if(id == "cretaceousinfo")
	{
		document.getElementById("cretaceousinfo").style.visibility = "visible";

	}
}

function toggleinvisible(id)
{
	document.getElementById(id).style.visibility = "hidden";
}



//Individual Dino Page
///////////////////////////////////////////////////

var isDinoVoted = false;

function startselect()
{
	document.getElementById("infotextblue").style.visibility = "visible";
	document.getElementById("infotextgreen").style.visibility = "hidden";
	document.getElementById("infotextred").style.visibility = "hidden";
	
	document.getElementById("bluebackground").style.visibility = "visible";
	document.getElementById("greenbackground").style.visibility = "hidden";
	document.getElementById("redbackground").style.visibility = "hidden";
	
	document.getElementById("whitestarbutton").style.visibility = "visible";
	document.getElementById("yellowstarbutton").style.visibility = "hidden";
	
	document.getElementById("notice").style.visibility = "hidden";
	
}

function sectionselector(section)
{
	if( section == 'blue')
	{
		document.getElementById("infotextblue").style.visibility = "visible";
		document.getElementById("infotextgreen").style.visibility = "hidden";
		document.getElementById("infotextred").style.visibility = "hidden";
		
		document.getElementById("redbackground").style.visibility = "hidden";
		document.getElementById("greenbackground").style.visibility = "hidden";
		document.getElementById("bluebackground").style.visibility = "visible";
		
		
	}
	
	else if( section == 'green')
	{
		document.getElementById("infotextblue").style.visibility = "hidden";
		document.getElementById("infotextgreen").style.visibility = "visible";
		document.getElementById("infotextred").style.visibility = "hidden";
		
		document.getElementById("bluebackground").style.visibility = "hidden";
		document.getElementById("greenbackground").style.visibility = "visible";
		document.getElementById("redbackground").style.visibility = "hidden";
	
	}

	else if( section == 'red' && isDinoVoted == true)
	{
		document.getElementById("infotextblue").style.visibility = "hidden";
		document.getElementById("infotextgreen").style.visibility = "hidden";
		document.getElementById("infotextred").style.visibility = "visible";
		
		document.getElementById("bluebackground").style.visibility = "hidden";
		document.getElementById("greenbackground").style.visibility = "hidden";
		document.getElementById("redbackground").style.visibility = "visible";
	
	}
	
	else if( section == 'red' && isDinoVoted == false)
	{
		document.getElementById("notice").style.visibility = "visible";
	}
}


