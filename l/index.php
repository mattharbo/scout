<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
		
        <link rel="stylesheet" href="../css/interface.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body class="bodygreybg">
        
        <!-- ~ Preloader ~ -->
        <div id="preloader"></div>
        
        <!-- ~ Tablet and Desktop mode ~ -->
        <div id="notmobile">
            <div id="notmobile_content">MyScout experience is designed for mobile!</div>
        </div>

        <!-- ~ Left menu ~ -->
        <div id="leftmenu" class="leftmenu">
            <span class="welcomemsg">Hi Matthieu</span>
                <a href="../l/">Upcoming games</a>
                <a href="../e/">Game results</a>
                <a href="../n/">New game</a>
            <span class="madeby">Made with &#9917; in Paris</span>
        </div>

        <div id="contentToPushByLeftMenu">

        <div id="blackOverlay" class="blackOverlay"></div>
        
        <!-- ~ Header ~ -->
        <div id="headerFixed">
            <div id="leftMenuBtn" onclick="openLeftNav();"></div>
            <div id="pageTitleNoValidation">Your game(s)</div>
        </div>
        
        <!-- ~ Listing ~ -->

        <div id="pageContentBelowFixedHeader">
        
            <?php
            
            include '../script/dbincludes.php';
            
            $retrieveopenedgames="select game.gameid, game.gamedate, game.gamecompetition, game.gamestage, team1.teamname, team2.teamname
            from game
            join team as team1 on game.gamehometeam = team1.teamid
            join team as team2 on game.gameawayteam = team2.teamid
            where game.gamestatus=0
            order by game.gamedate ASC";
            
            dbconnexion();
            $resultsarray = dbread($retrieveopenedgames);
            dbclosing();
            
            //Max number of game retrieved by the query
            for ($p=0; $p<count($resultsarray);$p++){
                echo "<a href=../r/?id=".$resultsarray[$p][0].">";            
                //[][1]=dateandhour
                //[][2]=compet
                //[][3]=journey
                //[][4]=hometeam
                //[][5]=awayteam
                echo "<div id='gamelistentry'>";
                    echo "<div id='gamelistdate'><div id='gamelistdatenumber'>".returndateday($resultsarray[$p][1])."</div>";
                    echo "<div id='gamelistdatemonth'>".returndatemonth($resultsarray[$p][1])."</div></div>";
                
                    echo "<div id='gamelistinfo'>";
                        echo "<span class='gamelistinfocompet'>".$resultsarray[$p][2]."</span>";
                        echo "<span class='gamelistinfohour'>@ ".returndatehour($resultsarray[$p][1])."</span>";
                        echo "<span class='gamelistinfohometeam'>".$resultsarray[$p][4]."</span>";
                        echo "<span class='gamelistinfoawayteam'>".$resultsarray[$p][5]."</span>";
                    echo "</div>";
                echo "</div>";
                echo "</a>";
            }
            
            ?>

        </div>

        </div>
        
        <!-- ~ Scripts ~ -->
        
        <script type="text/javascript" src="../lib/jquery-latest.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#preloader').fadeOut('slow',function(){$(this).remove();});

            });
       </script>
        <script type="text/javascript" src='../lib/creationform.js'></script>
        <script type="text/javascript" src='../lib/leftmenu.js'></script>

	</body>
</html>
