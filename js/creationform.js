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

function closeWindow(path){
    window.location = path;    
}

function form_ajax_post(targeturl){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    
    var vars = "table_information="+JSON.stringify(forminfo);
    
    hr.open("POST", targeturl, true);
    
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
//			document.getElementById("submissionForm").innerHTML = "Saved";
            document.getElementById("submissionForm").innerHTML = return_data;
	    }
    }
    
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("submissionForm").innerHTML = "Processing...";
    
    //REDIRECTION > Should be through the listing page (to be developed)
    //window.location.replace("../l/");
}