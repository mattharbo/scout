function openLeftNav() {
    document.getElementById("leftmenu").style.width = "240px";
    document.getElementById("contentToPushByLeftMenu").style.marginLeft = "240px";
    document.getElementById("contentToPushByLeftMenu").style.marginRight = "-240px";
    document.getElementById("headerFixed").style.left = "240px";
    document.getElementById("blackOverlay").style.visibility = "visible";
    document.getElementById("blackOverlay").onclick = function(){ closeLeftNav(); };
    document.body.style.overflow="hidden";
}

function closeLeftNav() {
    document.getElementById("leftmenu").style.width = "0";
	document.getElementById("headerFixed").style.left = "0";
    document.getElementById("contentToPushByLeftMenu").style.marginLeft = "0";
    document.getElementById("contentToPushByLeftMenu").style.marginRight = "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("blackOverlay").style.visibility = "hidden";
    document.body.style.overflow="visible";
    document.getElementById("blackOverlay").onclick = "";
}

function openLeftNavNotFixedHeader() {
    document.getElementById("leftmenu").style.width = "240px";
    document.getElementById("contentToPushByLeftMenu").style.marginLeft = "240px";
    document.getElementById("contentToPushByLeftMenu").style.marginRight = "-240px";
    document.getElementById("header").style.left = "240px";
    document.getElementById("blackOverlay").style.visibility = "visible";
    document.getElementById("blackOverlay").onclick = function(){ closeLeftNavNotFixedHeader(); };
    document.body.style.overflow="hidden";
}

function closeLeftNavNotFixedHeader() {
    document.getElementById("leftmenu").style.width = "0";
    document.getElementById("header").style.left = "0";
    document.getElementById("contentToPushByLeftMenu").style.marginLeft = "0";
    document.getElementById("contentToPushByLeftMenu").style.marginRight = "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("blackOverlay").style.visibility = "hidden";
    document.body.style.overflow="visible";
    document.getElementById("blackOverlay").onclick = "";
}