var divSelected = "";
var pitchState = false;


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
    
}


function addUnit(elem) {
    divSelected=elem;
    
    console.log(window.location.href +" :: Add Unit to "+elem.id);
    
    var DivContent = document.getElementById(elem.id).textContent;
    
    document.getElementById(elem.id).innerHTML = parseInt(DivContent)+1;
            
    //array insertion here
}

function alertSave() {
    alert("There is always a shoot before a save ! ;)");
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