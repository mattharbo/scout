<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
        
        <script src='./js/scout.js'></script>

		<link rel="stylesheet" href="./css/interface.css">
<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="./ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	<body>
<!--    http://smallenvelop.com/display-loading-icon-page-loads-completely/-->
        

<!--############# TURNOVER CONTAINER #############-->
        <div id="turnoverNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('turnoverNavContainer');"></div>
                <div id="pageTitle">Turnover</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchContainerTurnover" class="pitchcontainerclass"></div>
            
        </div>        
        
<!--############# SHOOT CONTAINER PAGE 1 #############-->
        <div id="shootNavContainerPage1" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('shootNavContainerPage1');"></div>
                <div id="pageTitleNoValidation">Shoot (1/2)</div>
            </div>
            
            <div id="pitchContainerShoot" class="pitchcontainerclass"></div>
            
            <div id="pitchExpandBtnShoot" class="pitchExpandBtn" onclick="expandCollapsePitch(this, 'pitchContainerShoot');"></div>
            
            <div id="proposalTitle">What king of shoot?</div>
            
            <div id="propositions">

                <div id="strike" class="proposalLineNext">
                    Strike
                </div>
                
                <div id="freekick" class="proposalLineNext">
                    Free kick
                </div>
                
                <div id="penalty" class="proposalLineNext">
                    Penalty kick
                </div>
                
            </div>
            
        </div>
        
<!--############# SHOOT CONTAINER PAGE 2 #############-->
        <div id="shootNavContainerPage2" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('shootNavContainerPage2');"></div>
                <div id="pageTitleNoValidation">Shoot (2/2)</div>
            </div>
            
            <div id="proposalTitle">Shoot accurancy?</div>
            
            <div id="propositions">
                
                <div id="ontarget" class="proposalLineValidation">
                    On target
                </div>
                
                <div id="save" class="proposalLineValidation">
                    Saved
                </div>
                
                <div id="goal" class="proposalLineValidation">
                    Goal
                </div>
                
            </div>
            
        </div>

<!--############# CROSS CONTAINER #############-->
        <div id="crossNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('crossNavContainer');"></div>
                <div id="pageTitle">Cross</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchContainerCross" class="pitchcontainerclass"></div>
            
            <div id="proposalTitle">Cross details</div>
            
            <div id="propositions">

                <input type="checkbox" id="intercepted" name="crosstype" />
                
                <label class="forcheckbox" for="intercepted">Intercepted</label>

                <input type="checkbox" id="blocked" name="crosstype" class="checkbox"/>
                
                <label class="forcheckbox" for="blocked">Blocked</label>
            
                <input type="checkbox" id="completed" name="crosstype" class="checkbox"/>
                
                <label class="forcheckbox" for="completed">Completed</label>
                
            </div>
            
            <div id="foulRadioBtn" class="radios">
                    <input type="radio" name="foulTeam" value="home" id="foul1">
                    <label class="radio" for="foul1">#SCB</label>

                    <input type="radio" name="foulTeam" value="away" id="foul2">
                    <label class="radio" for="foul2">#PSG</label>
                </div>
            
        </div>      
        
<!--############# FOUL CONTAINER #############-->
        <div id="foulNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('foulNavContainer');"></div>
                <div id="pageTitle">Foul</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchExpandBtnFoul" class="pitchExpandBtn" onclick="expandCollapsePitch(this, 'pitchContainerFoul');"></div>
            
            <div id="pitchContainerFoul" class="pitchfloulcontainerclass"></div>
            
            <div id="proposalTitle">Foul details</div>
            
            <div id="propositions">

                <input type="checkbox" id="yellowcard" name="foultype" />
                
                <label class="forcheckbox" for="yellowcard">Yellow card</label>

                <input type="checkbox" id="redcard" name="foultype" class="checkbox"/>
                
                <label class="forcheckbox" for="redcard">Red card</label>
            
                <input type="checkbox" id="nowhistle" name="foultype" class="checkbox"/>
                
                <label class="forcheckbox" for="nowhistle">No whistle blow</label>
                
            </div>
            
        </div>
        
<!--############# CORNER KICK #############-->
        <div id="cornerNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('cornerNavContainer');"></div>
                <div id="pageTitleNoValidation">Corner Kick</div>
            </div>
            
            <div id="proposalTitle">Which side?</div>
            
            <div id="propositions">
                
                <div id="leftside" class="proposalLineValidation">
                    Left side
                </div>
                
                <div id="rightside" class="proposalLineValidation">
                    Right side
                </div>
                
            </div>
            
        </div>
        
<!--############# OFFSIDE CONTAINER #############-->
        <div id="offsideNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('offsideNavContainer');"></div>
                <div id="pageTitle">Offside</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchContainerCross" class="pitchcontainerclass"></div>
            
        </div> 
        
<!--############# DEFAULT VIEW #############-->
        
		<div id="header">
            <a href="/" class="logo" id="logo_header">scout</a>
        </div><!--Header-->
        
        <div id="matchPresentation">
            <div id="scoreBox" class="scoreBoxClass">0 - 0</div>
            <div id="hashContainer">
                <div id="hashHome" class="hashTeam">#TOT</div>
                <div id="hashAway" class="hashTeam">#LIV</div>
            </div>
            <div id="teamNameContainer">
                <div id="teamNameHome" class="teamName">Tottenham Hotspur FC</div>
                <div id="teamNameAway" class="teamName">Liverpool FC</div>
            </div>
        </div>
        
        <div id="timeBox">
            <div id="timeAndHalf">1st Half - 32:00</div>
            <div id="liveIcon">_</div>
            <div id="stopHalfBtn">End of 1st Period</div>
        </div>
        
        <div id="turnover" class="figureLine">
            <div id="" class="dataScoreHome" onclick="openRightNav('turnoverNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Turnover(s)</div>
            <div id="" class="dataScoreAway" onclick="openRightNav('turnoverNavContainer');">0</div>
        </div>
        
        <div id="shoot" class="figureLine">
            <div id="" class="dataScoreHome" onclick="openRightNav('shootNavContainerPage1');">0</div>
            <div id="dataType"  class="dataLabel">Shoot(s)</div>
            <div id="" class="dataScoreAway" onclick="openRightNav('shootNavContainerPage1');">0</div>
        </div>
        
        <div id="cross" class="figureLine">
            <div id="" class="dataScoreHome" onclick="openRightNav('crossNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Crosse(s)</div>
            <div id="" class="dataScoreAway" onclick="openRightNav('crossNavContainer');">0</div>
        </div>
        
        <div id="foul" class="figureLine">
            <div id="" class="dataScoreHome" onclick="openRightNav('foulNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Foul(s)</div>
            <div id="" class="dataScoreAway" onclick="openRightNav('foulNavContainer');">0</div>
        </div>
        
        <div id="corner" class="figureLine">
            <div id="" class="dataScoreHome" onclick="openRightNav('cornerNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Corner Kick(s)</div>
            <div id="" class="dataScoreAway" onclick="openRightNav('cornerNavContainer');">0</div>
        </div>
        
        <div id="offside" class="figureLine">
            <div id="" class="dataScoreHome" onclick="openRightNav('offsideNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Offside(s)</div>
            <div id="" class="dataScoreAway" onclick="openRightNav('offsideNavContainer');">0</div>
        </div>
        
	</body>
</html>