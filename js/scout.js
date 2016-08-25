var divSelected = "";
var pitchState = false;

//+gameID +eventID

//turnover > action	team	time	x	y			
//shoot >	action	team	time	x	y	type	state	
//cross >	action	team	time	x	y		state	
//foul >	action	team	time	x	y			[judgment]
//corner >	action	team	time			type		
//offside >	action	team	time	x	y			



function openRightNav(selecteddiv, elem){
    
    document.getElementById(elem).style.width="100%";
    
    var DivContent = document.getElementById(selecteddiv.id).textContent;
    document.getElementById(selecteddiv.id).innerHTML = parseInt(DivContent)+1;
}

function closeRightNav(elem){
    
    pitchState = false;
    document.getElementById(elem).style.width="0";
    document.getElementById("pitchContainerShoot").style.height="250px";
    document.getElementById("pitchContainerFoul").style.height="250px";
    
//    console.log(window.location.href +" :: Remove unit to "+divSelected.id);
    
//    var DivContent = document.getElementById(divSelected.id).textContent;
//    
//    document.getElementById(divSelected.id).innerHTML = parseInt(DivContent)-1;
}

function submitRightNav(){
    document.getElementById("foulNavContainer").style.width="0";
    
    console.log(window.location.href +" :: Submit Unit for "+divSelected.id);
    console.log(lasteventX);
    console.log(lasteventY);
    
}

var lasteventX=0;
var lasteventY=0;

function printMousePos(elem) {
    var thediv=elem.id;
    var rect = document.getElementById(thediv).getBoundingClientRect();
    var mouseX = event.clientX-9;
    var mouseY = event.clientY-20;
    var eventX=((mouseX-rect.left)/rect.width).toFixed(2);
    var eventY=((mouseY-rect.top)/rect.height).toFixed(2);
    
    //Update global variables for last position 
    lasteventX=eventX;
    lasteventY=eventY;
    
    console.log("X position = " + Math.round(eventX*100) + " %");
    console.log("Y position = " + Math.round(eventY*100) + " %");
    
    document.getElementById('pitchpointer').style.display= 'block';
    document.getElementById('pitchpointer').style.left = Math.round(eventX*100)+'%';
    document.getElementById('pitchpointer').style.top = Math.round(eventY*100)+'%';
}

function addUnit(elem) {
    divSelected=elem;
    
    console.log(window.location.href +" :: Add Unit to "+elem.id);
    
    var DivContent = document.getElementById(elem.id).textContent;
    
    document.getElementById(elem.id).innerHTML = parseInt(DivContent)+1;
            
    //array insertion here
}

function expandCollapsePitch(sourcediv, elem){
    
    if(pitchState==false){
        document.getElementById(elem).style.height="460px";
        document.getElementById(sourcediv.id).style.backgroundImage='url("./ressources/retracticon@x2.png")';
        
        pitchState = true;
    }else{
        document.getElementById(elem).style.height="250px";
        document.getElementById(sourcediv.id).style.backgroundImage='url("./ressources/expandicon@x2.png")';
        
        pitchState = false;
    }
    
}

//PUSH ALL EVENT (IE ARRAY) TO SERVER
//http://stackoverflow.com/questions/9001526/send-array-with-ajax-to-php-script

//HELP TO CREATE AN ARRAY OF OBJECTS
//http://stackoverflow.com/questions/1290131/javascript-how-to-create-an-array-of-object-literals-in-a-loop