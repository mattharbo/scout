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
//$informationarray['11']=hometeamifknowninbase
//$informationarray['12']=hometeamifknowninbase

include '../script/dbincludes.php';

dbconnexion();

//If new home team then team creation
if($informationarray['11'] == '' ){
    
    $querycreateteamhome = "INSERT INTO `team` (`teamid`, `teamname`, `teamnickname`, `teamcity`) VALUES ('".$hometeamuniqid."', '".$informationarray[0]."', '".$informationarray[1]."', '');";
    
    dbwrite($querycreateteamhome); 
}


//If new away team then team creation
if($informationarray['12'] == '' ){
    
    $querycreateteamaway = "INSERT INTO `team` (`teamid`, `teamname`, `teamnickname`, `teamcity`) VALUES ('".$awayteamuniqid."', '".$informationarray[2]."', '".$informationarray[3]."', '');";
    
    dbwrite($querycreateteamaway);
}

//4 case studies

//Both home and away teams are knew
if($informationarray['11'] == '' &&  $informationarray['12'] == '' ){
    
    $querycreategame = "INSERT INTO `game` (`gameid`, `gamedate`, `gamehometeam`, `gameawayteam`, `gamestadium`, `gamestatus`, `gamecompetition`, `gamestage`) VALUES (NULL, '".mergedate($informationarray[8], $informationarray[6], $informationarray[7], $informationarray[9], $informationarray[10])."', '".$hometeamuniqid."', '".$awayteamuniqid."', NULL, '0', '".$informationarray['4']."', '".$informationarray['5']."');";
    
    dbwrite($querycreategame);
    
}

//Away team is retrieved from BDD and Home team is knew
if($informationarray['11'] == '' &&  $informationarray['12'] != '' ){

    $querycreategame = "INSERT INTO `game` (`gameid`, `gamedate`, `gamehometeam`, `gameawayteam`, `gamestadium`, `gamestatus`, `gamecompetition`, `gamestage`) VALUES (NULL, '".mergedate($informationarray[8], $informationarray[6], $informationarray[7], $informationarray[9], $informationarray[10])."', '".$hometeamuniqid."', '".$informationarray[12]."', NULL, '0', '".$informationarray['4']."', '".$informationarray['5']."');";
    
    dbwrite($querycreategame);
}

//Home team is retrieved from BDD and Away team is knew
if($informationarray['11'] != '' &&  $informationarray['12'] == '' ){
    
    $querycreategame = "INSERT INTO `game` (`gameid`, `gamedate`, `gamehometeam`, `gameawayteam`, `gamestadium`, `gamestatus`, `gamecompetition`, `gamestage`) VALUES (NULL, '".mergedate($informationarray[8], $informationarray[6], $informationarray[7], $informationarray[9], $informationarray[10])."', '".$informationarray[11]."', '".$awayteamuniqid."', NULL, '0', '".$informationarray['4']."', '".$informationarray['5']."');";
    
    dbwrite($querycreategame);
}

//Both home and away teams are retrieved from BDD
if($informationarray['11'] != '' &&  $informationarray['12'] != '' ){
    
    $querycreategame = "INSERT INTO `game` (`gameid`, `gamedate`, `gamehometeam`, `gameawayteam`, `gamestadium`, `gamestatus`, `gamecompetition`, `gamestage`) VALUES (NULL, '".mergedate($informationarray[8], $informationarray[6], $informationarray[7], $informationarray[9], $informationarray[10])."', '".$informationarray[11]."', '".$informationarray[12]."', NULL, '0', '".$informationarray['4']."', '".$informationarray['5']."');";
    
    dbwrite($querycreategame);
}

dbclosing();

echo "Data Saved";

?>