<?php

include '../script/dbincludes.php';

$datatoimport = array(
array('OGC Nice','OGCN','Nice'),
array('Paris Saint-Germain','PSG','Paris'),
array('AS Monaco FC','ASMFC','Monaco'),
array('Toulouse FC','TFC','Toulouse'),
array('En Avant Guingamp','EAG','Guingamp'),
array('Girondins de Bordeaux','FCGB','Bordeaux'),
array('Stade Rennais','SR','Rennes'),
array('Olympique Lyonnais','OL','Lyon'),
array('AS Saint-Etienne','ASSE','Saint-Etienne'),
array('SCO Angers','SCO','Angers'),
array('FC Metz','FCM','Metz'),
array('Olympique de Marseille','OM','Marseille'),
array('FC Nantes','FCNA','Nantes'),
array('Sporting Club Bastia','SCB','Bastia'),
array('Montpellier Hérault','MHSC','Montpellier'),
array('SM Caen','SMC','Caen'),
array('Dijon FCO','DFCO','Dijon'),
array('Lille OSC','LOSC','Lille'),
array('FC Lorient','FCL','Lorient'),
array('AS Nancy Lorraine','ASNL','Nancy')
);

$maxrow=count($datatoimport);

dbconnexion();

for ($i=0;$i<=$maxrow-1;$i++){
    
    $prefix="T";
    $random1=rand();
    $time=time();
    $team1=md5($random1.$time);
    $teamuniqid = $prefix.$team1;
    
    $querycreateteamhome = "INSERT INTO `team` (`teamid`, `teamname`, `teamnickname`, `teamcity`) VALUES ('".$teamuniqid."', '".$datatoimport[$i][0]."', '".$datatoimport[$i][1]."', '".$datatoimport[$i][2]."');";
    
    dbwrite($querycreateteamhome);   
    
}

dbclosing();

echo $maxrow." new teams have been added to DB";

    
?>