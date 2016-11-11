<?php

//Retrieve information from record screens
$gameinfoarray = json_decode($_POST['game_information'], true);

include '../script/dbincludes.php';

$querycupdategame = "UPDATE game SET game.gamestatus=1 WHERE game.gameid='".$gameinfoarray."'";

dbconnexion();
dbwrite($querycupdategame);
dbclosing();

?>