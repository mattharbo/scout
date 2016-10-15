<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
		
        <link rel="stylesheet" href="../css/interface.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body>
        
        <!-- Preloader -->
        <div id="preloader"></div>
        
        <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Your game(s)</div>
        </div>
        
        <!--############# Listing #############-->
        
        <?php
        
        include '../script/dbincludes.php';
        
        $retrieveopenedgames="select game.gamedate, game.gamecompetition, game.gamestage, team1.teamname, team2.teamname
        from game
        join team as team1 on game.gamehometeam = team1.teamid
        join team as team2 on game.gameawayteam = team2.teamid
        where game.gamestatus=0
        order by game.gamedate ASC";
        
        dbconnexion();
        $resultsarray = dbread($retrieveopenedgames);
        dbclosing();
        
        //Max number of game retrieved by the query
        for ($p=0; $p<=count($resultsarray);$p++){
            //Number of colomn asked by the query
            for ($z=0; $z<=4;$z++){
                echo $resultsarray[$p][$z];
            }
            echo "<br><br>";
        }
        
	echo $my_env_var = getenv('TESTVAR');
        ?>
        
        <!--############# SCRIPTS #############-->
        
        <script type="text/javascript" src="../js/jquery-latest.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#preloader').fadeOut('slow',function(){$(this).remove();});

            });
       </script>
        <script type="text/javascript" src='../js/creationform.js'></script>


	</body>
</html>
