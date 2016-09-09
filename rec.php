<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
        
        <script type="text/javascript" src="./js/jquery-latest.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("1000");
        })
        </script>
		
        <link rel="stylesheet" href="./css/interface.css">
<!--        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>-->
        
        <script type="text/javascript" src='./js/scout.js'></script>
        <script type="text/javascript" src='./js/chrono.js'></script>

<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="./ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	<body>
<!--    http://smallenvelop.com/display-loading-icon-page-loads-completely/-->
<!--############# LOADER #############-->
        <div class="loader"></div>

<!--############# TURNOVER CONTAINER #############-->
        <div id="turnoverNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitle">Turnover</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchContainerTurnover" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer1');">
                <img src="./ressources/pointer@x2.png" height="22" width="17" id="pitchpointer1">
            </div>
            
        </div>        
        
<!--############# SHOOT CONTAINER PAGE 1 #############-->
        <div id="shootNavContainerPage1" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Shoot (1/2)</div>
            </div>
            
            <div id="pitchContainerShoot" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer2');">
                <img src="./ressources/pointer@x2.png" height="22" width="17" id="pitchpointer2">
            </div>
            
            <div id="pitchExpandBtnShoot" class="pitchExpandBtn" onclick="expandCollapsePitch(this, 'pitchContainerShoot');"></div>
            
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
        
<!--############# SHOOT CONTAINER PAGE 2 #############-->
        <div id="shootNavContainerPage2" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Shoot (2/2)</div>
            </div>
            
            <div id="proposalTitle">Shoot accurancy?</div>
            
            <div id="propositions">
                
                <div id="offtarget" class="proposalLineValidation" onclick="steptwo(this);submitRightNav();">
                    Off target
                </div>
                
                <div id="blocked" class="proposalLineValidation" onclick="steptwo(this);submitRightNav();">
                    Blocked
                </div>
                
                <div id="save" class="proposalLineValidation" onclick="steptwo(this);submitRightNav();">
                    Saved (GK)
                </div>
                
                <div id="goal" class="proposalLineValidation" onclick="steptwo(this);submitRightNav();">
                    Goal
                </div>
                
            </div>
            
        </div>

<!--############# CROSS CONTAINER #############-->
        <div id="crossNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitle">Cross</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchContainerCross" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer3');">
                <img src="./ressources/pointer@x2.png" height="22" width="17" id="pitchpointer3">
            </div>
            
            <div id="proposalTitle">Cross details</div>
            
            <div id="propositions" class="radios">

               <input type="radio" name="crosstype" id="intercepted"/>
                
                <label class="forradiobtn" for="intercepted">Intercepted (GK)</label>
    
                <input type="radio" name="crosstype" id="block" />
                
                <label class="forradiobtn" for="block">Blocked</label>
                
                <input type="radio" name="crosstype" id="completed" />
                
                <label class="forradiobtn" for="completed">Completed</label>
                
                <label class="forradiobtn" for="incompleted">Incompleted</label>
                
            </div>
            
        </div>      
        
<!--############# FOUL CONTAINER #############-->
        <div id="foulNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitle">Foul</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchExpandBtnFoul" class="pitchExpandBtn" onclick="expandCollapsePitch(this, 'pitchContainerFoul');"></div>
            
            <div id="pitchContainerFoul" class="pitchfloulcontainerclass" onclick="printMousePos(this, 'pitchpointer4');">
                <img src="./ressources/pointer@x2.png" height="22" width="17" id="pitchpointer4">
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
        
<!--############# CORNER KICK #############-->
        <div id="cornerNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">Corner Kick</div>
            </div>
            
            <div id="proposalTitle">Which side?</div>
            
            <div id="propositions">
                
                <div id="leftside" class="proposalLineValidation" onclick="typeSelection('left');submitRightNav();">
                    Left side
                </div>
                
                <div id="rightside" class="proposalLineValidation" onclick="typeSelection('right');submitRightNav();">
                    Right side
                </div>
                
            </div>
            
        </div>
        
<!--############# OFFSIDE CONTAINER #############-->
        <div id="offsideNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitle">Offside</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchContainerOffside" class="pitchcontainerclass" onclick="printMousePos(this, 'pitchpointer5');">
                <img src="./ressources/pointer@x2.png" height="22" width="17" id="pitchpointer5">
            </div>
            
        </div> 
        
<!--############# DEFAULT VIEW #############-->
        
		<div id="header">
            <a href="/" class="logo" id="logo_header">scout</a>
        </div><!--Header-->
        
        <div id="matchPresentation">
            <div id="scoreBox" class="scoreBoxClass">0 - 0</div>
            <div id="liveIcon">_</div>
            <div id="hashContainer">
                <div id="hashHome" class="hashTeam">#PSG</div>
                <div id="hashAway" class="hashTeam">#ASSE</div>
            </div>
            <div id="teamNameContainer">
                <div id="teamNameHome" class="teamName">Paris Saint-Germain</div>
                <div id="teamNameAway" class="teamName">AS Saint-Etienne</div>
            </div>
        </div>
        
        <div id="timeBox">
            <div id="timeAndHalf">1st Half - 00:00</div>   
            <div id="stopHalfBtn" onclick="chronoStart();">Start of 1st Half</div>
        </div>
        
        <div id="turnover" class="figureLine">
            <div id="turnoverHome" class="dataScoreHome" onclick="openRightNav(this,'turnoverNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Turnover(s)</div>
            <div id="turnoverAway" class="dataScoreAway" onclick="openRightNav(this,'turnoverNavContainer');">0</div>
        </div>
        
        <div id="shoot" class="figureLine">
            <div id="shootHome" class="dataScoreHome" onclick="openRightNav(this,'shootNavContainerPage1');">0</div>
            <div id="dataType"  class="dataLabel">Shoot(s)</div>
            <div id="shootAway" class="dataScoreAway" onclick="openRightNav(this,'shootNavContainerPage1');">0</div>
        </div>
        
        <div id="cross" class="figureLine">
            <div id="crossHome" class="dataScoreHome" onclick="openRightNav(this,'crossNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Crosse(s)</div>
            <div id="crossAway" class="dataScoreAway" onclick="openRightNav(this,'crossNavContainer');">0</div>
        </div>
        
        <div id="foul" class="figureLine">
            <div id="foulHome" class="dataScoreHome" onclick="openRightNav(this,'foulNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Foul(s)</div>
            <div id="foulAway" class="dataScoreAway" onclick="openRightNav(this,'foulNavContainer');">0</div>
        </div>
        
        <div id="corner" class="figureLine">
            <div id="cornerHome" class="dataScoreHome" onclick="openRightNav(this,'cornerNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Corner Kick(s)</div>
            <div id="cornerAway" class="dataScoreAway" onclick="openRightNav(this,'cornerNavContainer');">0</div>
        </div>
        
        <div id="offside" class="figureLine">
            <div id="offsideHome" class="dataScoreHome" onclick="openRightNav(this,'offsideNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Offside(s)</div>
            <div id="offsideAway" class="dataScoreAway" onclick="openRightNav(this,'offsideNavContainer');">0</div>
        </div>
        
<!--TO BE REMOVED-->
<!--
        <div id="testsubmit" class="figureLine" onclick="ajax_post();">
            SUBMIT (Test btn)
        </div>
-->
	</body>
</html>