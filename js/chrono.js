//From http://www.proglogic.com/code/javascript/time/chronometer.php

var eventminute=0;
var period=0;
var stoprec=true;

var start = 0 //date and time when chrono launch
var end = 0 //(CURRENT) date and time always updated at each loop
var diff = 0 //time spend

var timerID = 0

function halfDisplay(){
    var halfStringDisplay;
    if(period==1){
        halfStringDisplay="1st Half"
    }
    if(period==2){
        halfStringDisplay="2nd Half"
    }
    return halfStringDisplay
}

function displayMinuteEvent(varmin){
    
    var periodtime=45;//TO BE CHANGE TO 45MIN FOR A SOCCER GAME
    var trueminute;
    
    if(period==1){
        if(varmin>=periodtime){
            var additionaltime = (varmin-periodtime)+1;
            trueminute="45+" + additionaltime;
        }else{
            trueminute=varmin+1
        }
    }
    
    if(period==2){
        if(varmin>=(periodtime*2)){
            var additionaltime = (varmin-(periodtime*2))+1;
            trueminute="90+" + additionaltime;
        }else{
            trueminute=periodtime+varmin+1
        }
    }
    
    return trueminute;
}

function chronoStart(){
    stoprec=false;
    period=period+1;
    if(period==1){
        document.getElementById("stopHalfBtn").innerHTML = "End of 1st Half";
    }
    if(period==2){
        document.getElementById("stopHalfBtn").innerHTML = "End of 2nd Half";
    }
    document.getElementById("stopHalfBtn").onclick = chronoStop;
    start = new Date();
	chrono()
    document.getElementById("liveIcon").style.display="block"
}

function chrono(){
	end = new Date()
    
	diff = end - start
	diff = new Date(diff)
    
	var sec = diff.getSeconds()
	var min = diff.getMinutes()

    
    if(min != eventminute){
        console.log("Minute change");
        eventminute=min;
    }
    
	if (min < 10){
		min = "0" + min
	}
	if (sec < 10){
		sec = "0" + sec
	}
    
    document.getElementById("timeAndHalf").innerHTML = halfDisplay() + " - " + min + ":" + sec;
    
	timerID = setTimeout("chrono()", 10);//Call Chrono function every 10ms => 0.01s
}

function chronoStop(){
    stoprec=true;
    document.getElementById("stopHalfBtn").innerHTML = "Start 2nd half";
    document.getElementById("stopHalfBtn").onclick = chronoStart
	clearTimeout(timerID);
    document.getElementById("liveIcon").style.display="none"
    if(period==2){
        document.getElementById("liveIcon").style.display="none"
        document.getElementById("stopHalfBtn").innerHTML = "SAVE";
        document.getElementById("stopHalfBtn").onclick=ajax_post();
    }
}