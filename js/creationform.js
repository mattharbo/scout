var forminfo=[];

function getfocus(inputselected, destinationid) {
    inputid=inputselected.id;
    divid=destinationid.id;
    
    document.getElementById(divid).style.visibility="visible";
    document.getElementById(inputid).placeholder="";
    document.getElementById(inputid).style.borderBottom="2px #029E9B solid";
}

function goToStepTwo(targetContainer){    
    forminfo.push(
        document.getElementById("fieldNameHomeContent").value,
        document.getElementById("fieldHashHomeContent").value
    );

    document.getElementById(targetContainer).style.width="100%";
}

function goToStepThree(targetContainer){
    forminfo.push(
        document.getElementById("fieldNameAwayContent").value,
        document.getElementById("fieldHashAwayContent").value
    );

    document.getElementById(targetContainer).style.width="100%";
}

function submitNewGame(){
    forminfo.push(
        document.getElementById("fieldCompetitionContent").value,
        document.getElementById("fieldCompetitionStepContent").value,
        document.getElementById("fieldMonthIdContent").value,
        document.getElementById("fieldDayIdContent").value,
        document.getElementById("fieldYearIdContent").value,
        document.getElementById("fieldHourIdContent").value,
        document.getElementById("fieldMinuteIdContent").value
    );
    
    console.log(forminfo);
}

function form_ajax_post(targeturl){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    //var url = targeturl;
    
    var vars = "table_content="+JSON.stringify(forminfo);
    
    hr.open("POST", targeturl, true);
    
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("submissionForm").innerHTML = "Saved";
	    }
    }
    
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("submissionForm").innerHTML = "Processing...";
    
    //REDIRECTION WORKS!!!!
    window.location = "../";
}