<?php

$eventsarray=$_POST['table_content'];

$gameevents = json_decode($_POST['table_content'], true);

//$events=[[
//   'action' => 'turnover',
//   'team' => 'home',
//   'time' => '32',
//   'x' => '0.34',
//   'y' => '0.78',   
//]];

$data = json_encode($gameevents);

$newjsonfile = fopen('../jsondata/new_map_data.json','w+');
fwrite($newjsonfile, $data);
fclose($newjsonfile);

echo "Data archived ;)";

?>