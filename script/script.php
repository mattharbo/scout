<?php

$eventsarray=$_POST['table_content'];

$gameevents = json_decode($_POST['table_content'], true);

//$data = json_decode(stripslashes($_POST['data']));

//$events=[[
//   'action' => 'turnover',
//    'team' => 'home',
//    'time' => '32',
//    'x' => '0.34',
//    'y' => '0.78',   
//]];

//$pathtofile = "../template.json";
//$gameevents = json_decode(file_get_contents($pathtofile), true);

foreach($gameevents as $record){    
    $action = $record['action'];
    echo $action."<br>";
    
    $team = $record['team'];
    echo $team."<br>";
    
    $time = $record['time'];
    echo $time."<br>";
    
    $xposition = $record['x'];
    echo $xposition."<br>";
    
    $yposition = $record['y'];
    echo $yposition."<br>";
    
    $type = $record['type'];
    echo $type."<br>";
    
    $state = $record['state'];
    echo $state."<br>";
    
    $judgments = $record['judgments'];
    echo $judgments."<br>";
}



?>