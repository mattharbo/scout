<?php

$GLOBALS['servername'] = "eu-cdbr-west-01.cleardb.com";
$GLOBALS['username'] = "bf9408c30c58cb";
$GLOBALS['password'] = "28dd5e4e";
$GLOBALS['dbname'] = "heroku_2c007d1d9463440";
$GLOBALS['conn'] = "";

function dbconnexion(){
    // Create connection
    $GLOBALS['conn'] = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
    // Check connection
    if (!$GLOBALS['conn']) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

function dbrequest($sql){
    
    if (mysqli_multi_query($GLOBALS['conn'], $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . mysqli_error($GLOBALS['conn']);
    }
    
    return $GLOBALS['conn'];
    
}

function dbclosing(){
    mysqli_close($GLOBALS['conn']);
}

?>