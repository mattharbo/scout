for (var x in rawdatafromdb) {
    
    if(rawdatafromdb[x].eventaction!="corner"){
        
        //console.log("x:"+(rawdatafromdb[x].eventposx)*100+"y:"+(rawdatafromdb[x].eventposy)*100);
    
        show_image('../ressources/pointer@x2.png', 
            17, 22, 
        (rawdatafromdb[x].eventposx)*100,
        (rawdatafromdb[x].eventposy)*100);

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
    
}