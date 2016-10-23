<?php

$gameid = $_GET["gameid"];
$teamid = $_GET["teamid"];

include './dbincludes.php';

$retrievegameevents="select * from event where eventgame=$gameid
and eventteamid='$teamid'";
    
//    and event.eventaction='cross'
        
dbconnexion();
$eventsarray = dbread($retrievegameevents);
dbclosing();

//print_r($eventsarray);

echo json_encode($eventsarray);

?>