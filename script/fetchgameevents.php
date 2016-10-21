<?php

$gameid = $_GET["gameid"];

include './dbincludes.php';

$retrievegameevents="select * from event where event.eventgame=$gameid";
    
//    and event.eventaction='cross'
        
dbconnexion();
$eventsarray = dbread($retrievegameevents);
dbclosing();

//print_r($eventsarray);

echo json_encode($eventsarray);

?>