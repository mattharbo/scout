<?php

$GLOBALS['conn'] = "";

//$GLOBALS['servername'] = "localhost";
//$GLOBALS['username'] = "root";
//$GLOBALS['password'] = "root";
//$GLOBALS['dbname'] = "scout";

$GLOBALS['servername'] = getenv('servername');
$GLOBALS['username'] = getenv('username');
$GLOBALS['password'] = getenv('password');
$GLOBALS['dbname'] = getenv('dbname');

function dbconnexion(){
    // Create connection
    $GLOBALS['conn'] = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
    // Check connection
    if (!$GLOBALS['conn']) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

function dbwrite($sql){
    if (mysqli_multi_query($GLOBALS['conn'], $sql)) {
        //echo "New records created successfully";
    } else {
        echo "Error: " . mysqli_error($GLOBALS['conn']);
    }
    
    return $GLOBALS['conn'];
}

function dbread($query){
    $req = mysqli_query($GLOBALS['conn'], $query);

    $rows = [];
    while($row = mysqli_fetch_array($req))
    {
        $rows[] = $row;
    }
    
    return $rows;
}

function dbclosing(){
    mysqli_close($GLOBALS['conn']);
}

function mergedate($year,$month,$day,$hour,$minutes){
    
    if ($month=="January"){$monthdigit="01";}
    if ($month=="February"){$monthdigit="02";}
    if ($month=="March"){$monthdigit="03";}
    if ($month=="April"){$monthdigit="04";}
    if ($month=="May"){$monthdigit="05";}
    if ($month=="June"){$monthdigit="06";}
    if ($month=="July"){$monthdigit="07";}
    if ($month=="August"){$monthdigit="08";}
    if ($month=="September"){$monthdigit="09";}
    if ($month=="October"){$monthdigit="10";}
    if ($month=="November"){$monthdigit="11";}
    if ($month=="December"){$monthdigit="12";}
    
    //hour minute second month day year
    $concatdate=mktime($hour, $minutes, 0, $monthdigit, $day, $year);
    $finaldate = date('Y-m-d H:i:s', $concatdate);
    
    return $finaldate;
}

function returndateday($datetime){
    $secondhyphen=strrpos($datetime,"-");
    $stringtoreturn=substr($datetime, $secondhyphen+1, 2);
    return $stringtoreturn;
}

function returndatemonth($datetime){
    $firsthyphen=strpos($datetime,"-");
    $stringtoreturn=substr($datetime, $firsthyphen+1, 2);
    return date('M', mktime(0,0,0,$stringtoreturn,10));
}

function returndatehour($datetime){
    $firstdots=strpos($datetime,":");    
    $stringtoreturn=substr($datetime, $firstdots-2, 5);
    return $stringtoreturn;
}

?>
