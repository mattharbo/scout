var newhometeam = "";
var newhomehash = "";
var newawayteam = "";
var newawayhash = "";
var newcompetition = "";
var newstage = "";
var newhour = "";
var newminute = "";

function getfocus(inputselected, destinationid) {
    inputid=inputselected.id;
    divid=destinationid.id;
    document.getElementById(divid).style.visibility="visible";
    document.getElementById(inputid).placeholder="";
    document.getElementById(inputid).style.borderBottom="2px #029E9B solid";
}

function stepTwo(targetContainer){
    newhometeam=document.getElementById("fieldNameHomeContent").value;
    newhomehash=document.getElementById("fieldHashHomeContent").value;
    
    //document.getElementById('newTeamNameHome').innerHTML=newhometeam;
    
//    document.getElementById('newTeamNameHome').style.visibility="visible";
//    document.getElementById('versusCol').style.visibility="visible";
    document.getElementById(targetContainer).style.width="100%";
}

function stepThree(targetContainer){
    newawayteam=document.getElementById("fieldNameAwayContent").value;
    newawayhash=document.getElementById("fieldHashAwayContent").value;
    
//    document.getElementById('newTeamNameAway').innerHTML=newawayteam;
//    
//    document.getElementById('newTeamNameAway').style.visibility="visible";
    document.getElementById(targetContainer).style.width="100%";
}