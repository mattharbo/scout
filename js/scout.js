var lasteventX=0;
var lasteventY=0;
var divSelected = "";
var divContainerSelected = "";
var pitchState = false;
var pitchPointerSelected = "";
var events=[];

//+gameID +eventID
//turnover > action	team	time	x	y			
//shoot >	action	team	time	x	y	type	state	
//cross >	action	team	time	x	y		state	
//foul >	action	team	time	x	y			[judgment]
//corner >	action	team	time			type		
//offside >	action	team	time	x	y			

//-------------------------

function openRightNav(selecteddiv, elem){
    divSelected = selecteddiv;
    divContainerSelected = elem;
    
    document.getElementById(elem).style.width="100%";
    
    console.log(divSelected.id);
}

//-------------------------

function closeRightNav(){
    pitchState = false;
    document.getElementById(divContainerSelected).style.width="0";
    document.getElementById("pitchContainerShoot").style.height="250px";
    document.getElementById("pitchContainerFoul").style.height="250px";

    eraseTempData();
}

//-------------------------

function submitRightNav(){
    document.getElementById("foulNavContainer").style.width="0";
    
    if(lasteventX != 0 && lasteventY != 0){
        
        divid = divSelected.id;
        nrbchar = divid.length;
        
        var newevent={
        "action": divid.substring(0,nrbchar-4),
        "team": divid.slice(-4),
        "time": "",
        "x": lasteventX,
        "y": lasteventY
        };
    
        events.push(newevent);
        
        //Add a unit to the board
        var DivContent = document.getElementById(divSelected.id).textContent;
        document.getElementById(divSelected.id).innerHTML = parseInt(DivContent)+1;
        
        divSelected = "";
        document.getElementById(divContainerSelected).style.width="0%";
        
        divContainerSelected = "";
        eraseTempData();
        
    }else{
        console.log("Nothing to save :/");
    }
}

//-------------------------

function printMousePos(elem, pitchpointerselec) {
    var pitchicon = pitchpointerselec;
    var thediv=elem.id;
    var rect = document.getElementById(thediv).getBoundingClientRect();
    var mouseX = event.clientX-9;
    var mouseY = event.clientY-20;
    var eventX=((mouseX-rect.left)/rect.width).toFixed(2);
    var eventY=((mouseY-rect.top)/rect.height).toFixed(2);
    
    //Update global variables for last position 
    lasteventX=eventX;
    lasteventY=eventY;
    pitchPointerSelected=pitchicon;
    
//    console.log("X position = " + Math.round(eventX*100) + " %");
//    console.log("Y position = " + Math.round(eventY*100) + " %");
    
    document.getElementById(pitchicon).style.display= 'block';
    document.getElementById(pitchicon).style.left = Math.round(eventX*100)+'%';
    document.getElementById(pitchicon).style.top = Math.round(eventY*100)+'%';
}

//-------------------------

function eraseTempData(){
    lasteventX=0;
    lasteventY=0;
    divSelected = "";
    divContainerSelected = "";
    
    if(pitchPointerSelected !== ""){
        document.getElementById(pitchPointerSelected).style.display= 'none';
        document.getElementById(pitchPointerSelected).style.left = '0%';
        document.getElementById(pitchPointerSelected).style.top = '0%';
    }
}

//-------------------------

function addUnit(elem) {
    divSelected=elem;
    
    console.log(window.location.href +" :: Add Unit to "+elem.id);
    
    var DivContent = document.getElementById(elem.id).textContent;
    
    document.getElementById(elem.id).innerHTML = parseInt(DivContent)+1;
            
    //array insertion here
}

//-------------------------

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