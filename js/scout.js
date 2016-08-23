var divSelected = "";

function openRightNav(elem){
    document.getElementById(elem).style.width="100%";
}

function closeRightNav(elem){
    
    document.getElementById(elem).style.width="0";
    
    console.log(window.location.href +" :: Remove unit to "+divSelected.id);
    
    var DivContent = document.getElementById(divSelected.id).textContent;
    
    document.getElementById(divSelected.id).innerHTML = parseInt(DivContent)-1;
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

function expandPitch(sourcediv, elem){
    
    document.getElementById(elem).style.height="460px";
    document.getElementById(sourcediv.id).style.backgroundImage='url("./ressources/retracticon@x2.png")';
    document.getElementById(sourcediv.id).removeAttribute("onclick");
     
}

function retractPitch(){
    document.getElementById("pitchContainer").style.height="250px";
    document.getElementById("pitchExpandBtn").style.backgroundImage='url("./ressources/expandicon@x2.png")';
    
    document.getElementById("pitchExpandBtn").onclick=function(){};
}