

//-------------------------

var lasteventX=0;
var lasteventY=0;
var divSelected = "";
var divContainerSelected = "";
var pitchState = false;
var pitchPointerSelected = "";
var events=[];
var period="0";
var type="";
var state="";

//+gameID +eventID
//turnover > action	team	time	x	y			
//shoot >	action	team	time	x	y	type	state	
//cross >	action	team	time	x	y		state	
//foul >	action	team	time	x	y			[judgment]
//corner >	action	team	time			type		
//offside >	action	team	time	x	y			

//-------------------------

function periodbtn(){
    if(period==0){
        document.getElementById("stopHalfBtn").innerHTML = "Start of 2nd Half";
        period="1";
    }else{
        if(period==1){
            document.getElementById("stopHalfBtn").innerHTML = "End of 2nd Half";
            period="2";
        }else{
            if(period==2){
                document.getElementById("stopHalfBtn").innerHTML = "Start of 1st OT";
                period="3";
            }else{
                if(period==3){
                    document.getElementById("stopHalfBtn").innerHTML = "End of 1st OT";
                    period="4";
                }else{
                    if(period==4){
                        document.getElementById("stopHalfBtn").innerHTML = "Start of 2nd OT";
                        period="5";
                    }else{
                        if(period==5){
                            document.getElementById("stopHalfBtn").innerHTML = "End of 2nd OT";
                        }
                    }
                }
            }
        }
    }   
}

//-------------------------

function openRightNav(selecteddiv, elem){
    divSelected = selecteddiv;
    divContainerSelected = elem;
    
    document.getElementById(elem).style.width="100%";
    
    //console.log(divSelected.id);
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

function next(elem, parentdiv, childdiv){
    if(lasteventX != 0 && lasteventY != 0){
        type=elem.id;
        openRightNav(elem, childdiv);
        document.getElementById(parentdiv).style.width="0";
    }else{
        window.alert("Nothing to save ! Locate the action on the pitch...or close the window ;)");
    }
}

//-------------------------

function nexttwo(elem){
    state=elem.id;
    console.log(state);
}

//-------------------------

function submitRightNav(){
    document.getElementById("foulNavContainer").style.width="0";
    
    if(lasteventX != 0 && lasteventY != 0){
    
        divid = divSelected.id;
        nrbchar = divid.length;
        
        console.log("Submission for "+divid);
        
        if(divid == "turnoverHome" || divid == "turnoverAway"){
            var newevent={
                "action": divid.substring(0,nrbchar-4),
                "team": divid.slice(-4).toLowerCase(),
                "time": "",
                "x": lasteventX,
                "y": lasteventY
            };
        }
        
        if(divid == "crossHome" || divid == "crossAway"){
            //DEFINE VARIABLE HERE
            
            //FOR RADIO BUTTON
            //var gender = document.querySelector('input[name = "foultype"]:checked').value;
        }
        
        if(divid == "foulHome" || divid == "foulAway"){
            var fouljudgment = [];
            var yellowcardbool = document.getElementById("yellowcard").checked;
            var redcardbool = document.getElementById("redcard").checked;
            var nowhistlebool = document.getElementById("nowhistle").checked;
            
            if(yellowcardbool==true){
                fouljudgment.push(yellowcard.value);
            }
            if(redcardbool==true){
                fouljudgment.push(redcard.value);
            }
            if(nowhistlebool==true){
                fouljudgment.push(nowhistle.value);
            }
            
            var newevent={
                "action": divid.substring(0,nrbchar-4),
                "team": divid.slice(-4).toLowerCase(),
                "time": "",
                "x": lasteventX,
                "y": lasteventY,
                "judgments":fouljudgment
            };
        }
        
        //Record event in array
        events.push(newevent);
        
        //Add a unit to the board
        var DivContent = document.getElementById(divSelected.id).textContent;
        document.getElementById(divSelected.id).innerHTML = parseInt(DivContent)+1;
        document.getElementById(divContainerSelected).style.width="0%";
        
        eraseTempData();
        
    }else{
        window.alert("Nothing to save ! Locate the action on the pitch...or close the window ;)");
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
    document.getElementById("yellowcard").checked=false;
    document.getElementById("redcard").checked=false;
    document.getElementById("nowhistle").checked=false;
    
    if(pitchPointerSelected !== ""){
        document.getElementById(pitchPointerSelected).style.display= 'none';
        document.getElementById(pitchPointerSelected).style.left = '0%';
        document.getElementById(pitchPointerSelected).style.top = '0%';
    }
    
    pitchPointerSelected="";
    type="";
    state="";
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

//-------------------------

function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "./script/script.php";
    
    var vars = "table_content="+JSON.stringify(events);
    
    hr.open("POST", url, true);
    
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("testsubmit").innerHTML = return_data;
	    }
    }
    
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("testsubmit").innerHTML = "Processing...";
    
    //REDIRECTION WORKS!!!!
    //window.location = "http://www.google.com";
}

//PUSH ALL EVENT (IE ARRAY) TO SERVER
//http://stackoverflow.com/questions/9001526/send-array-with-ajax-to-php-script

//HELP TO CREATE AN ARRAY OF OBJECTS
//http://stackoverflow.com/questions/1290131/javascript-how-to-create-an-array-of-object-literals-in-a-loop