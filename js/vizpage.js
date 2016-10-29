//turnover
//shoot
//cross
//foul 
//offside


//eventaction:"turnover"
//eventgame:"282"
//eventid:"217"
//eventjudgment1:""
//eventjudgment2:""
//eventjudgment3:""
//eventopponentteamid:"Tefeffe150efd3358bbb"
//eventperiod:"1"
//eventposx:"0.38"
//eventposy:"0.14"
//eventstate:""
//eventteamid:"T6e03a81d2cf6c40c750"
//eventtime:"1"
//eventtype:""




//Data displayed by default
//displayimages();

var filteringoption=[];

function removeallimages(){
    $('.dot_pointer').remove();  
}

function displayimages(){

    displayeventstype('cross');
    displayeventstype('shoot');            
    
}





function displayeventstype(eventype){
    
    for (var x in rawdatafromdb) {
    
        if(rawdatafromdb[x].eventaction==eventype){

            //Home team events > Red > Shooting up
            if(rawdatafromdb[x].eventteamid == idhometeam){

                show_image('../ressources/dot_pointer_red@x2.png', 
                    15, 15,           
                (95-(rawdatafromdb[x].eventposx)*100),
                (91-(parseFloat((rawdatafromdb[x].eventposy))-0.03)*100));

            }else{
            //Away team events > Blue > Shooting down

                show_image('../ressources/dot_pointer_blue@x2.png', 
                    15, 15,
                (rawdatafromdb[x].eventposx)*100,
                (parseFloat((rawdatafromdb[x].eventposy))+0.03)*100);

            }   
        }
    }
}






function show_image(src, width, height, left, top) {
    var img = document.createElement("img");
    
    img.src = src;
    img.width = width;
    img.height = height;
    
    // This next line will just add it to the <body> tag
    document.getElementById("pitchContainerDataviz").appendChild(img);
    
    img.style.position = 'absolute';
    img.style.left = left+'%';
    img.style.top = top+'%';
    img.className = "dot_pointer";
}


function openfilterNav() {
    document.getElementById("filterSidenav").style.width = "60px";
    document.getElementById("blackOverlay").style.visibility = "visible" ;
}

function closefilterNav() {
    document.getElementById("filterSidenav").style.width = "0";
    document.getElementById("blackOverlay").style.visibility = "hidden" ;
}