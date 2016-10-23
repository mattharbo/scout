var firstload=0;
var previousrow;

//Call the function on first load
loaddata();

//Call the function to fetch new data every 5 seconds
setInterval(function(){
    loaddata()
}, 5000);

function loaddata(){

    $(function() 
      {
        $.ajax({                                      
          url: '../script/fetchgameevents.php/?gameid='+gameidfromphp+"&teamid="+teamtowatched,
          dataType: 'json',
          success: function(data)
            {
                //Nombre de ligne dans la BDD (ie events pour ce match)
                var rowwished=data.length-1;
                
                //1er chargement de la page de viz d'un match
                if(firstload==0){
                    
                    //Parcours de tous les evenements passes 
                    for (u = 1; u <= rowwished; u++) {
                        
                        //Affichage de tous les evenements passes
                        show_image('../ressources/pointer@x2.png', 17, 22, (data[u].eventposx)*100,(data[u].eventposy)*100);

                    }
                    
                    //Boolean de 1er load de page a true
                    firstload=1;
                    
                }else{
                    
                    //Post 1er chargement de la page de viz d'un match
                    if (rowwished!=previousrow){
                        
                        //Recuperation du nombre d'evenement non affichage pendant la periode du timer
                        nbofeventstodisplay=rowwished-previousrow;
                        
                        //Affichage de tous les elements manquants lors de la periode de timer
                        for (i = (rowwished-nbofeventstodisplay+1); i <= rowwished; i++) {

                            show_image('../ressources/pointer@x2.png', 17, 22, (data[i].eventposx)*100,(data[i].eventposy)*100);

                        }

                        //Recuperation de la derniere ligne affichee
                        previousrow=rowwished;

                    }   
                }              
            } 
        });
    })
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