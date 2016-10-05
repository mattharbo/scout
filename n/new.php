<?php

//Step 1: Create teams
//Step 2: Retrieve team id
//Step 3: Create game

include '../script/dbincludes.php';

$querycreategame = "INSERT INTO `game` (`gameid`, `gamedate`, `gamehometeam`, `gameawayteam`, `gamestadium`, `gamestatus`) VALUES (NULL, '2016-10-04 08:35:18', '006', '007', NULL, '0');";

$querycreateteam = "INSERT INTO `team` (`teamid`, `teamname`, `teamnickname`, `teamcity`) VALUES (4, 'test', 'TES', 'Taormina');";

//Conditions to be added to this query in order to get the last team created
$queryretrieveteam = "SELECT * FROM `team` LIMIT 0,1000;";

dbconnexion();
//dbwrite($query);
$test = dbread($queryretrieveteam);
dbclosing();

echo $test[0]['teamname'];

?>