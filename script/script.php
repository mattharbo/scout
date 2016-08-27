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

foreach($gameevents as $d){    
    $txt = $d['action'];
    echo $txt."<br>";
}

?>