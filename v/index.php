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
        
    <!-- ~ Tablet and Desktop mode ~ -->
    <div id="notmobile">
        <div id="notmobile_content">MyScout experience is designed for mobile!</div>
    </div>

    <!-- ~ Left menu ~ -->
    <div id="leftmenu" class="leftmenu">
      <a href="#" class="closebtn" onclick="closeLeftNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

    <div id="contentToPushByLeftMenu">
        
        <!-- ~ Filter Menu ~ -->  
        <div id="filterSidenav" class="filterSidenav">
            
            <div class="filterBtnUnchecked" onclick="displayeventstype('turnover', this);">
                Turnovers
            </div>
            
            <div class="filterBtnUnchecked" onclick="displayeventstype('shoot', this);">
                Shoots
            </div>
            
            <div class="filterBtnUnchecked" onclick="displayeventstype('cross', this);">
                Crosses
            </div>
            
            <div class="filterBtnUnchecked" onclick="displayeventstype('foul', this);">
                Fouls
            </div>
            
            <div class="filterBtnUnchecked" onclick="displayeventstype('offside', this);">
                Offsides
            </div>
            
        </div>

        <div id="blackOverlay" class="blackOverlay"></div>
            
        <!-- ~ DEFAULT VIEW ~ -->    
        <div id="headerFixed">
            <div id="leftMenuBtn" onclick="closefilterNav();openLeftNav();"></div>
            <div id="pageTitle">
                <? echo $gameinfoarray[0][1]." 0:0 ".$gameinfoarray[0][3];?>
            </div>
            <div id="filterPageBtn" onclick="openfilterNav();"></div>
        </div>
            
        <div id="pageContentBelowFixedHeader">
            
            <center><?
            echo "<span class='gamelistinfocompet'>".$gameinfoarray[0][4]."</span> • <span class='gamelistinfocompet'>".$gameinfoarray[0][5]."</span><br>";?>
            </center>        
            
            <br>
            
            <?
            echo $gameinfoarray[0][0]." (Red)";//Home team
            ?>
            
            <div id="pitchContainerDataviz" class="pitchcontainerdatavizclass">
            </div>
            
            <?
            echo $gameinfoarray[0][2]." (Blue)<br>";//Away team
            ?>
            
        </div>

    </div><!-- contentToPush -->
        
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
    <script type="text/javascript" src='../js/leftmenu.js'></script>
        
	</body>
</html>