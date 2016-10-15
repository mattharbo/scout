<?php

//Retrieve information from creation form
$informationarray = json_decode($_POST['table_information'], true);

//Define variables to uniq ID creation
$prefix="T";
$random1=rand();
$random2=rand();
$time=time();
$team1=md5($random1.$time);
$team2=md5($random2.$time);

//Define home and away teams uniq IDs
$hometeamuniqid = $prefix.$team1;
$awayteamuniqid = $prefix.$team2;

//$informationarray['0']=full home team name
//$informationarray['1']=hash home team name
//$informationarray['2']=full away team name
//$informationarray['3']=hash away team name
//$informationarray['4']=competition name
//$informationarray['5']=competition stage
//$informationarray['6']=month
//$informationarray['7']=day
//$informationarray['8']=year
//$informationarray['9']=hour
//$informationarray['10']=minute

include '../script/dbincludes.php';

$querycreateteamhome = "INSERT INTO `team` (`teamid`, `teamname`, `teamnickname`, `teamcity`) VALUES ('".$hometeamuniqid."', '".$informationarray[0]."', '".$informationarray[1]."', '');";

$querycreateteamaway = "INSERT INTO `team` (`teamid`, `teamname`, `teamnickname`, `teamcity`) VALUES ('".$awayteamuniqid."', '".$informationarray[2]."', '".$informationarray[3]."', '');";

$querycreategame = "INSERT INTO `game` (`gameid`, `gamedate`, `gamehometeam`, `gameawayteam`, `gamestadium`, `gamestatus`, `gamecompetition`, `gamestage`) VALUES (NULL, '".mergedate($informationarray[8], $informationarray[6], $informationarray[7], $informationarray[9], $informationarray[10])."', '".$hometeamuniqid."', '".$awayteamuniqid."', NULL, '0', '".$informationarray['4']."', '".$informationarray['5']."');";

dbconnexion();
dbwrite($querycreateteamhome);
dbwrite($querycreateteamaway);
dbwrite($querycreategame);
dbclosing();

echo "Data Saved";

?>