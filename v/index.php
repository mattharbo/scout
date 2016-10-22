<?
if (isset ($_GET["id"])) { 
    $gameid = $_GET["id"];
    
    include '../script/dbincludes.php';
    
    $retrievegameinformation="select team1.teamname, team1.teamnickname, team2.teamname, team2.teamnickname, game.gamecompetition, game.gamestage
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
        
    <!-- ~ DEFAULT VIEW ~ -->    
    <div id="header">
        <div id="closePageBtn" onclick="closeWindow('../');"></div>
        <div id="pageTitleNoValidation">
            <? echo "#".$gameinfoarray[0][1]." vs. #".$gameinfoarray[0][3];?>
        </div>
    </div>
        
    <div id="pitchContainerDataviz" class="pitchcontainerclass">
    </div>
        
        <?
        //echo print_r($gameinfoarray);
        echo $gameinfoarray[0][0];//Home team
        echo $gameinfoarray[0][1];//Home nickname
        echo $gameinfoarray[0][2];//Away team
        echo $gameinfoarray[0][3];//Away nickname
        echo $gameinfoarray[0][4];//Competition name
        echo $gameinfoarray[0][5];//Competition Day
        ?>
        
    <script>
        var rawdatafromdb = <?php echo json_encode($eventsarray)?>;    
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