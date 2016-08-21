<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
        
        <script src='./js/scout.js'></script>

		<link rel="stylesheet" href="./css/interface.css">
		<link rel="icon" href="./img/favicon.png">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	<body>
<!--    http://smallenvelop.com/display-loading-icon-page-loads-completely/-->
        
<!--############# SHOOT CONTAINER PAGE 1 #############-->
        <div id="shootNavContainerPage1">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('shootNavContainerPage1');"></div>
                <div id="pageTitle">Shoot (1/2)</div>
            </div>
            
            <div id="pitchContainer"></div>
            
            <div id="pitchExpandBtn" onclick="expandPitch();"></div>
            
            <div id="foulProposalTitle">What king of shoot?</div>
            
            <div id="foulPropositions">

                <div id="shoot" class="figureLine">
                    Strike
                </div>
                
            </div>
            
        </div>
        
<!--############# SHOOT CONTAINER PAGE 2 #############-->
        <div id="shootNavContainerPage2">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('shootNavContainerPage2');"></div>
                <div id="pageTitle">Shoot (2/2)</div>
            </div>
            
            <div id="foulProposalTitle">Shoot accurancy?</div>
            
            <div id="foulPropositions">

                radio button
                
            </div>
            
        </div>
        
<!--############# FOUL CONTAINER #############-->
        <div id="foulNavContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav('foulNavContainer');"></div>
                <div id="pageTitle">Foul</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            </div>
            
            <div id="pitchContainer"></div>
            
            <div id="pitchExpandBtn" onclick="expandPitch();"></div>
            
            <div id="foulProposalTitle">Foul details</div>
            
            <div id="foulPropositions">

                <input type="checkbox" id="choice1" name="lists" />
                
                <label class="forcheckbox" for="choice1">Yellow card</label>

                <input type="checkbox" id="choice2" name="lists" class="checkbox"/>
                
                <label class="forcheckbox" for="choice2">Red card</label>
            
                <input type="checkbox" id="choice3" name="lists" class="checkbox"/>
                
                <label class="forcheckbox" for="choice3">No whistle blow</label>
                
            </div>
            
        </div>
        
		<div id="header">
            <a href="/" class="logo" id="logo_header">scout</a>
        </div><!--Header-->
        
        <div id="matchPresentation">
            <div id="scoreBox" class="scoreBoxClass">0 - 0</div>
            <div id="hashContainer">
                <div id="hashHome" class="hashTeam">#SCB</div>
                <div id="hashAway" class="hashTeam">#PSG</div>
            </div>
            <div id="teamNameContainer">
                <div id="teamNameHome" class="teamName">Sporting Club Bastia</div>
                <div id="teamNameAway" class="teamName">Paris-Saint Germain</div>
            </div>
        </div>
        
        <div id="timeBox">
            <div id="timeAndHalf">1st Half - 32:00</div>
            <div id="liveIcon">_</div>
            <div id="stopHalfBtn">End of 1st Period</div>
        </div>
        
        <div id="turnover" class="figureLine">
            <div id="homeData" class="dataScore">0</div>
            <div id="dataType"  class="dataLabel">Turnover(s)</div>
            <div id="awayData" class="dataScore">0</div>
        </div>
        
        <div id="shoot" class="figureLine">
            <div id="homeData" class="dataScore" onclick="openRightNav('shootNavContainerPage1');">0</div>
            <div id="dataType"  class="dataLabel">Shoot(s)</div>
            <div id="awayData" class="dataScore" onclick="openRightNav('shootNavContainerPage1');">0</div>
        </div>
        
        <div id="cross" class="figureLine">
            <div id="homeData" class="dataScore">0</div>
            <div id="dataType"  class="dataLabel">Crosse(s)</div>
            <div id="awayData" class="dataScore">0</div>
        </div>
        
        <div id="foul" class="figureLine">
            <div id="homeData" class="dataScore" onclick="openRightNav('foulNavContainer');">0</div>
            <div id="dataType"  class="dataLabel">Foul(s)</div>
            <div id="awayData" class="dataScore" onclick="openRightNav('foulNavContainer');">0</div>
        </div>
        
        <div id="corner" class="figureLine">
            <div id="homeData" class="dataScore">0</div>
            <div id="dataType"  class="dataLabel">Corner Kick(s)</div>
            <div id="awayData" class="dataScore">0</div>
        </div>
        
        <div id="offside" class="figureLine">
            <div id="homeData" class="dataScore">0</div>
            <div id="dataType"  class="dataLabel">Offside(s)</div>
            <div id="awayData" class="dataScore">0</div>
        </div>
        
	</body>
</html>