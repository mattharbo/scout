<?php

//Retrieve information from record screens
$eventarray = json_decode($_POST['event_information'], true);

include '../script/dbincludes.php';

$querycreateevent = "INSERT INTO `event` (`eventid`, `eventgame`, `eventaction`, `eventteamid`, `eventopponentteamid`, `eventtime`, `eventperiod`, `eventposx`, `eventposy`, `eventtype`, `eventstate`, `eventjudgment1`, `eventjudgment2`, `eventjudgment3`)
VALUES
	('', '".$eventarray[0]['game']."', '".$eventarray[0]['action']."', '".$eventarray[0]['team']."', '".$eventarray[0]['opponent']."', '".$eventarray[0]['time']."', '".$eventarray[0]['period']."', '".$eventarray[0]['x']."', '".$eventarray[0]['y']."', '".$eventarray[0]['type']."', '".$eventarray[0]['state']."', '".$eventarray[0]['judgments'][0]."', '".$eventarray[0]['judgments'][1]."', '".$eventarray[0]['judgments'][2]."');";

dbconnexion();
dbwrite($querycreateevent);
dbclosing();

?>