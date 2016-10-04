<?php

//Step 1: Create teams
//Step 2: Retrieve team id
//Step 3: Create game

include '../script/insertclearDB.php';

$query = "INSERT INTO `game` (`gameid`, `gamedate`, `gamehometeam`, `gameawayteam`, `gamestadium`, `gamestatus`) VALUES (NULL, '2016-10-04 08:35:18', '006', '007', NULL, '0');";

dbconnexion();
dbrequest($query);
dbclosing();

?>