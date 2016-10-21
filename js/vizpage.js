//var previousrow;
//
//window.setInterval(function(){
//    //call your function here
//    
//    console.log("Array lenght: "+rawdatafromdb.length);
//    
//    var rowwished=rawdatafromdb.length-1;
//    
//    console.log("Last row printed: "+previousrow);
//    
//    if (rowwished!=previousrow){
//        
//        show_image('../ressources/pointer@x2.png', 
//        17, 22, 
//        (rawdatafromdb[rowwished].eventposx)*100,
//        (rawdatafromdb[rowwished].eventposy)*100);
//        
//        console.log("Img Printed!!");
//        
//        previousrow=rowwished;
//        
//    }
//      
//}, 1000);

//Replace previous function by ajax DB call...


for (var x in rawdatafromdb) {   
    //console.log("x:"+(rawdatafromdb[x].eventposx)*100+"y:"+(rawdatafromdb[x].eventposy)*100);
    
    show_image('../ressources/pointer@x2.png', 
        17, 22, 
    (rawdatafromdb[x].eventposx)*100,
    (rawdatafromdb[x].eventposy)*100);
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