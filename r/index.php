<?
if (isset ($_GET["id"])) { 
    $gameid = $_GET["id"];
    
    include '../script/dbincludes.php';
        
        $retrieveopenedgames="select game.gameid, team1.teamname, team1.teamnickname, team1.teamid, team2.teamname, team2.teamnickname, team2.teamid
        from game
        join team as team1 on game.gamehometeam = team1.teamid
        join team as team2 on game.gameawayteam = team2.teamid
        where game.gameid=$gameid";
        
        dbconnexion();
        $resultsarray = dbread($retrieveopenedgames);
        dbclosing();
    
} else { 
    header('Location: ../404/');
}?>
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

        <!-- ~ TURNOVER CONTAINER ~ -->
        <div id="turnoverNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Turnover</div>
                <!-- <div id="validationPageBtn" onclick="submitRightNav();event_ajax_post('../script/postevent.php');"></div> -->
            </div>
            
            <div id="pitchContainerTurnover" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer1');setTimeout(function (){submitRightNav('../script/postevent.php')},400);">
                <img src="../ressources/pointer@x2.png" height="22" width="17" id="pitchpointer1">
            </div>
            
        </div>        
        
        <!-- ~ SHOOT CONTAINER PAGE 1 ~ -->
        <div id="shootNavContainerPage1" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Shoot (1/2)</div>
            </div>
            
            <div id="pitchContainerShoot" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer2');">
                <img src="../ressources/pointer@x2.png" height="22" width="17" id="pitchpointer2">
            </div>
            
            <!-- <div id="pitchExpandBtnShoot" class="pitchExpandBtn" onclick="expandCollapsePitch(this, 'pitchContainerShoot');"></div> -->
            
            <div id="proposalTitle">What king of shoot?</div>
            
            <div id="propositions">

                <div id="strike" class="proposalLineNext" onclick="stepone(this,'shootNavContainerPage1','shootNavContainerPage2');">
                    Strike
                </div>
                
                <div id="freekick" class="proposalLineNext" onclick="stepone(this,'shootNavContainerPage1','shootNavContainerPage2');">
                    Free kick
                </div>
                
                <div id="penalty" class="proposalLineNext" onclick="stepone(this,'shootNavContainerPage1','shootNavContainerPage2');">
                    Penalty kick
                </div>
                
            </div>
            
        </div>
        
        <!-- ~ SHOOT CONTAINER PAGE 2 ~ -->
        <div id="shootNavContainerPage2" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Shoot (2/2)</div>
            </div>
            
            <div id="proposalTitle">Shoot accurancy?</div>
            
            <div id="propositions">
                
                <div id="offtarget" class="proposalLineValidation" onclick="steptwo(this);submitRightNav('../script/postevent.php');">
                    Off target
                </div>
                
                <div id="blocked" class="proposalLineValidation" onclick="steptwo(this);submitRightNav('../script/postevent.php');">
                    Blocked
                </div>
                
                <div id="save" class="proposalLineValidation" onclick="steptwo(this);submitRightNav('../script/postevent.php');">
                    Saved (GK)
                </div>

                <div id="woodwork" class="proposalLineValidation" onclick="steptwo(this);submitRightNav('../script/postevent.php');">
                    Wookwork
                </div>
                
                <div id="goal" class="proposalLineValidation" onclick="steptwo(this);submitRightNav('../script/postevent.php');">
                    Goal
                </div>
                
            </div>
            
        </div>

        <!-- ~ CROSS CONTAINER ~ -->
        <div id="crossNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitle">Cross</div>
                <div id="validationPageBtn" onclick="submitRightNav('../script/postevent.php');"></div>
            </div>
            
            <div id="pitchContainerCross" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer3');">
                <img src="../ressources/pointer@x2.png" height="22" width="17" id="pitchpointer3">
            </div>
            
            <div id="proposalTitle">Cross details</div>
            
            <div id="propositions" class="radios">

               <input type="radio" name="crosstype" id="intercepted"/>
                
                <label class="forradiobtn" for="intercepted">Intercepted (GK)</label>
    
                <input type="radio" name="crosstype" id="block" />
                
                <label class="forradiobtn" for="block">Blocked</label>
                
                <input type="radio" name="crosstype" id="completed" />
                
                <label class="forradiobtn" for="completed">Completed</label>
                
                <input type="radio" name="crosstype" id="incompleted" />
                
                <label class="forradiobtn" for="incompleted">Incompleted</label>
                
            </div>
            
        </div>      
        
        <!-- ~ FOUL CONTAINER ~ -->
        <div id="foulNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitle">Foul</div>
                <div id="validationPageBtn" onclick="submitRightNav('../script/postevent.php');"></div>
            </div>
            
<!--            <div id="pitchExpandBtnFoul" class="pitchExpandBtn" onclick="expandCollapsePitch(this, 'pitchContainerFoul');"></div>-->
            
            <div id="pitchContainerFoul" class="pitchfloulcontainerclass" onclick="printMousePos(this, 'pitchpointer4');">
                <img src="../ressources/pointer@x2.png" height="22" width="17" id="pitchpointer4">
            </div>
            
            <div id="proposalTitle">Foul details</div>
            
            <div id="propositions">

                <input type="checkbox" id="yellowcard" name="foultype" value="yellowcard" class="checkbox"/>
                
                <label class="forcheckbox" for="yellowcard">Yellow card</label>

                <input type="checkbox" id="redcard" name="foultype" class="checkbox" value="redcard"/>
                
                <label class="forcheckbox" for="redcard">Red card</label>
            
                <input type="checkbox" id="nowhistle" name="foultype" class="checkbox" value="nowhistle"/>
                
                <label class="forcheckbox" for="nowhistle">No whistle blow</label>
                
            </div>
            
        </div>
        
        <!-- ~ CORNER KICK ~ -->
        <div id="cornerNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Corner Kick</div>
            </div>
            
            <div id="proposalTitle">Which side?</div>
            
            <div id="propositions">
                
                <div id="leftside" class="proposalLineValidation" onclick="typeSelection('left');submitRightNav('../script/postevent.php');">
                    Left side
                </div>
                
                <div id="rightside" class="proposalLineValidation" onclick="typeSelection('right');submitRightNav('../script/postevent.php');">
                    Right side
                </div>
                
            </div>
            
        </div>
        
        <!-- ~ OFFSIDE CONTAINER ~ -->
        <div id="offsideNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <!-- <div id="pageTitle">Offside</div> -->
                <div id="pageTitleNoValidation">Offside</div>
                <!-- <div id="validationPageBtn" onclick="submitRightNav();event_ajax_post('../script/postevent.php');"></div> -->
            </div>
            
            <div id="pitchContainerOffside" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer5');setTimeout(function (){submitRightNav('../script/postevent.php')},400);">
                <img src="../ressources/pointer@x2.png" height="22" width="17" id="pitchpointer5">
            </div>
            
        </div>

        <div id="blackOverlay" class="blackOverlay"></div>
        
        <!-- ~ DEFAULT VIEW ~ -->
		<div id="header">
            <div id="leftMenuBtn" onclick="openLeftNavNotFixedHeader();"></div>
            <a href="/" class="logo" id="logo_header">scout</a>
            <div id="roadsterBtn" onclick=""></div>
        </div>
        
        <div id="matchPresentation">
            <div id="scoreBox" class="scoreBoxClass">0 - 0</div>
            <div id="liveIcon">_</div>
            <div id="hashContainer">
                <div id="hashHome" class="hashTeam">#<?echo $resultsarray[0][2];?></div>
                <div id="hashAway" class="hashTeam">#<?echo $resultsarray[0][5];?></div>
            </div>
            <div id="teamNameContainer">
                <div id="teamNameHome" class="teamName"><?echo $resultsarray[0][1];?></div>
                <div id="teamNameAway" class="teamName"><?echo $resultsarray[0][4];?></div>
            </div>
        </div>
        
        <div id="timeBox">
            <div id="timeAndHalf">1st Half - 00:00</div>   
            <div id="stopHalfBtn" onclick="chronoStart();">Start of 1st Half</div>
        </div>
        
        <div id="turnover" class="figureLine">
            <div id="turnoverHome" class="dataScoreHome" onclick="openRightNav(this,'turnoverNavContainer', '<?echo $resultsarray[0][3];?>', '<?echo $resultsarray[0][6];?>', '<?echo $gameid;?>');">0</div>
            <div id="dataType"  class="dataLabel">Turnover(s)</div>
            <div id="turnoverAway" class="dataScoreAway" onclick="openRightNav(this,'turnoverNavContainer', '<?echo $resultsarray[0][6];?>', '<?echo $resultsarray[0][3];?>', '<?echo $gameid;?>');">0</div>
        </div>
        
        <div id="shoot" class="figureLine">
            <div id="shootHome" class="dataScoreHome" onclick="openRightNav(this,'shootNavContainerPage1', '<?echo $resultsarray[0][3];?>', '<?echo $resultsarray[0][6];?>', '<?echo $gameid;?>');">0</div>
            <div id="dataType"  class="dataLabel">Shoot(s)</div>
            <div id="shootAway" class="dataScoreAway" onclick="openRightNav(this,'shootNavContainerPage1', '<?echo $resultsarray[0][6];?>', '<?echo $resultsarray[0][3];?>', '<?echo $gameid;?>');">0</div>
        </div>
        
        <div id="cross" class="figureLine">
            <div id="crossHome" class="dataScoreHome" onclick="openRightNav(this,'crossNavContainer', '<?echo $resultsarray[0][3];?>', '<?echo $resultsarray[0][6];?>', '<?echo $gameid;?>');">0</div>
            <div id="dataType"  class="dataLabel">Crosse(s)</div>
            <div id="crossAway" class="dataScoreAway" onclick="openRightNav(this,'crossNavContainer', '<?echo $resultsarray[0][6];?>', '<?echo $resultsarray[0][3];?>', '<?echo $gameid;?>');">0</div>
        </div>
        
        <div id="foul" class="figureLine">
            <div id="foulHome" class="dataScoreHome" onclick="openRightNav(this,'foulNavContainer', '<?echo $resultsarray[0][3];?>', '<?echo $resultsarray[0][6];?>', '<?echo $gameid;?>');">0</div>
            <div id="dataType"  class="dataLabel">Foul(s)</div>
            <div id="foulAway" class="dataScoreAway" onclick="openRightNav(this,'foulNavContainer', '<?echo $resultsarray[0][6];?>', '<?echo $resultsarray[0][3];?>', '<?echo $gameid;?>');">0</div>
        </div>
        
        <div id="corner" class="figureLine">
            <div id="cornerHome" class="dataScoreHome" onclick="openRightNav(this,'cornerNavContainer', '<?echo $resultsarray[0][3];?>', '<?echo $resultsarray[0][6];?>', '<?echo $gameid;?>');">0</div>
            <div id="dataType"  class="dataLabel">Corner Kick(s)</div>
            <div id="cornerAway" class="dataScoreAway" onclick="openRightNav(this,'cornerNavContainer', '<?echo $resultsarray[0][6];?>', '<?echo $resultsarray[0][3];?>', '<?echo $gameid;?>');">0</div>
        </div>
        
        <div id="offside" class="figureLine">
            <div id="offsideHome" class="dataScoreHome" onclick="openRightNav(this,'offsideNavContainer', '<?echo $resultsarray[0][3];?>', '<?echo $resultsarray[0][6];?>', '<?echo $gameid;?>');">0</div>
            <div id="dataType"  class="dataLabel">Offside(s)</div>
            <div id="offsideAway" class="dataScoreAway" onclick="openRightNav(this,'offsideNavContainer', '<?echo $resultsarray[0][6];?>', '<?echo $resultsarray[0][3];?>', '<?echo $gameid;?>');">0</div>
        </div>

        </div>
        
        <!-- ~ SCRIPTS ~ -->


        <script type="text/javascript">
            var idgame = '<?php echo $gameid?>';
        </script>
        
        <script type="text/javascript" src="../lib/jquery-latest.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#preloader').fadeOut('slow',function(){$(this).remove();});

            });
       </script>
        <script type="text/javascript" src='../lib/recordpage.js'></script>
        <script type="text/javascript" src='../lib/chrono.js'></script>
        <script type="text/javascript" src='../lib/leftmenu.js'></script>
        
	</body>
</html>