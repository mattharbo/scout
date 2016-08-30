//From http://www.proglogic.com/code/javascript/time/chronometer.php

var start = 0 //date and time when chrono launch
var end = 0 //(CURRENT) date and time always updated at each loop
var diff = 0 //time spend

//var startTime = 0 //useless???!?

var timerID = 0

function chronoStart(){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	document.chronoForm.reset.onclick = chronoReset
	start = new Date()
	chrono()
}

function chrono(){
	end = new Date()
    
	diff = end - start
	diff = new Date(diff)
    
	var msec = diff.getMilliseconds()
	var sec = diff.getSeconds()
	var min = diff.getMinutes()
	var hr = diff.getHours()-1
    
	if (min < 10){
		min = "0" + min
	}
	if (sec < 10){
		sec = "0" + sec
	}
	if(msec < 10){
		msec = "00" +msec
	}
	else if(msec < 100){
		msec = "0" +msec
	}
	//document.getElementById("chronotime").innerHTML = hr + ":" + min + ":" + sec + ":" + msec
    
    document.getElementById("chronotime").innerHTML = min + ":" + sec
    
	timerID = setTimeout("chrono()", 10)
}

function chronoStop(){
	document.chronoForm.startstop.value = "start!"
	document.chronoForm.startstop.onclick = chronoContinue
	document.chronoForm.reset.onclick = chronoStopReset
	clearTimeout(timerID)
}

function chronoContinue(){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	document.chronoForm.reset.onclick = chronoReset
	start = new Date()-diff
	start = new Date(start)
	chrono()
}

function chronoReset(){
	document.getElementById("chronotime").innerHTML = "0:00:00:000"
	start = new Date()
}

function chronoStopReset(){
	document.getElementById("chronotime").innerHTML = "0:00:00:000"
	document.chronoForm.startstop.onclick = chronoStart
}
