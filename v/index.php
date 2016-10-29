<?
if (isset ($_GET["id"])) { 
    $gameid = $_GET["id"];
    
    include '../script/dbincludes.php';
    
    $retrievegameinformation="select team1.teamname, team1.teamnickname, team2.teamname, team2.teamnickname, game.gamecompetition, game.gamestage, game.gamehometeam, game.gameawayteam
    from game
    join team as team1 on game.gamehometeam = team1.teamid
    join team as team2 on game.gameawayteam = team2.teamid
    where game.gameid=$gameid";
        
    $retrievegameevents="select *
    from event
    where event.eventgame=$gameid";
    
//    and event.eventaction='cross'
        
    dbconnexion();
    $gameinfoarray = dbread($retrievegameinformation);
    $eventsarray = dbread($retrievegameevents);
    dbclosing();
    
} else { 
    header('Location: ../404/');
}
?>
<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
    
        <link rel="stylesheet" href="../css/interface.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body>

    <!-- ~ Preloader ~ -->
    <div id="preloader"></div>
        
    <!-- ~ Filter Menu ~ -->  
    <div id="filterSidenav" class="filterSidenav">
        
        filters<br>
        
        <input type="button" value="Supprimer" onclick="removeallimages()">
        
        <input type="button" value="Afficher" onclick="displayimages()">
        
    </div>
    <div id="blackOverlay" class="blackOverlay">
    </div>
        
        
    <!-- ~ DEFAULT VIEW ~ -->    
    <div id="headerFixed">
        <div id="leftMenuBtn" onclick=""></div>
        <div id="pageTitle">
            <? echo "#".$gameinfoarray[0][1].$gameinfoarray[0][3];?>
        </div>
        <div id="filterPageBtn" onclick="openfilterNav();"></div>
    </div>
        
    <div id="pageContentBelowFixedHeader">
        
        <center><?
        echo "<span class='gamelistinfocompet'>".$gameinfoarray[0][4]."</span><br>";//Competition name
        echo "<span class='gamelistinfocompet'>".$gameinfoarray[0][5]."</span><br>";//Competition Day
        ?></center>
        
        
        
        
        
<!--
        <input type="checkbox" id="foul" value="foul" class="checkbox"/>
        <label class="forcheckbox" for="foul">Fouls</label>
        
        
         <input type="checkbox" id="cross" value="cross" class="checkboxx"/>
        <label class="forcheckbox" for="cross">Crosses</label>
-->
        
        
        <br>
        
        
        <?
        echo $gameinfoarray[0][0]." => RED";//Home team
        ?>
        
        <div id="pitchContainerDataviz" class="pitchcontainerdatavizclass">
        </div>
        
        <?
        echo $gameinfoarray[0][2]." => BLUE<br>";//Away team
        ?>
        
    </div>
        
    <script>
        var rawdatafromdb = <?php echo json_encode($eventsarray)?>;
        var idhometeam = '<?php echo $gameinfoarray[0][6]?>';
    </script>
        
    <!-- ~ SCRIPTS ~ -->
        
    <script type="text/javascript" src="../js/jquery-latest.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#preloader').fadeOut('slow',function(){$(this).remove();});
        });
    </script>
    <script type="text/javascript" src='../js/vizpage.js'></script>
        
	</body>
</html>