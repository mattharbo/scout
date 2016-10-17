<?php

    $_GET['term'];

    $conn = '';

    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'scout';

    // Create connection
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "select team.teamname from team where team.teamname like '%".$_GET['term']."%'";

    $req = mysqli_query($conn, $query);

    $rows = [];
    while($row = mysqli_fetch_array($req))
    {
        $rows[] = $row;
    }

    //return json data
    echo json_encode($rows);

?>