function openLeftNav() {
    document.getElementById("leftmenu").style.width = "200px";
    document.getElementById("contentToPushByLeftMenu").style.marginLeft = "200px";
    document.getElementById("contentToPushByLeftMenu").style.marginRight = "-200px";
    document.getElementById("headerFixed").style.left = "200px";
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