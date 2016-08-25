var divSelected = "";
var pitchState = false;

//+gameID +eventID
//turnover > team, position x, y
//shoot > team, position x, y, type (strike, freekick, penalty), state(ontarget, save, goal)
//cross > team, position x, y, state(intercepted, blocked, completed)
//foul > team, position x, y, judgment[yellow, red, nowhistle]
//corner > team, type (left, right)
//offside > team, position x, y

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
    var mouseX = event.clientX;
    var mouseY = event.clientY;
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