<?php

//define('DB_SERVER', 'eu-cdbr-west-01.cleardb.com');
//define('DB_USER', 'bf9408c30c58cb');
//define('DB_PASSWORD', '28dd5e4e');
//define('DB_NAME', 'heroku_2c007d1d9463440');

define('DB_SERVER', $GLOBALS['servername']);
define('DB_USER', $GLOBALS['username']);
define('DB_PASSWORD', $GLOBALS['password']);
define('DB_NAME', $GLOBALS['dbname']);

if (isset($_GET['term'])){
	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('SELECT teamid, teamname, teamnickname FROM team WHERE teamname LIKE :term');
	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
	    
	    while($row = $stmt->fetch()) {
	        $return_arr[] = array(
		        'label' => $row['teamname'],
		        'value' => $row['teamid'],
		        'value2' => $row['teamnickname'],
		    );
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}

?>
