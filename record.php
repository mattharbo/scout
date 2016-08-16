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
        
        <div id="foulNavContainer">
            
            <div id="header">
                
                <div id="closePageBtn" onclick="closeRightNav()"></div>
                <div id="pageTitle">Foul</div>
                <div id="validationPageBtn" onclick="submitRightNav();"></div>
            
            </div><!--Header-->
            
            <div id="foulSection1">
                <span class="sectionTitle">1. Which team committed the foul?</span>
                
                <div id="foulRadioBtn" class="radios">
                    <input type="radio" name="foulTeam" value="home" id="foul1">
                    <label class="radio" for="foul1">#SCB</label>

                    <input type="radio" name="foulTeam" value="away" id="foul2">
                    <label class="radio" for="foul2">#PSG</label>
                </div>
                
            </div>
            
            <div id="foulSection2">
                <span class="sectionTitle">2. Has a card been given?</span>
                
                <div id="foulCheckboxesBtn">
                    <input type="checkbox" name="cardteam" value="yellowcard" id="card1"/>
                    <label class="checkbox" for="card1">
                        <div id="yellowcard">Yellow Card</div>
                    </label>

                    <input type="checkbox" name="cardteam" value="redcard" id="card2" />
                    <label class="checkbox" for="card2">
                        <div id="redcard">Red Card</div>
                    </label>

                    <input type="checkbox" name="cardteam" value="nowhistle" id="card3" />
                    <label class="checkbox" for="card3">
                        <div id="nowhistle">No Whistle</div>
                    </label>
                </div>
            </div>
            
            <div id="foulSection3">
                <span class="sectionTitle">3. Where was it located on the pitch?</span>
                
                <div id="pitchDiv">
                    <img src="./ressources/vertical_pitch@1x.png" class="pitchimage">
                </div>
                
                <div id="expandBtn"></div>
                
                <div id="startHalfButton">Save</div>
                
            </div>
            
            
        </div><!--rightNav-->
        
		<div id="header">
            
            <a href="/" class="logo" id="logo_header">scout</a>
            
        </div><!--Header-->
        
        <div id="scoreContainer">0 - 0
        </div> <!--scoreContainer-->
        
        <div id="liveUpperContainer">
            
            <div id="homeTeamHash" class="hashTeam">
            #SCB
            </div><!--homeTeamHash-->
            
            <div id="awayTeamHash" class="hashTeam">
            #PSG
            </div><!--awayTeamHash-->
            
            <div id="homeTeamName" class="teamName">
            Sporting Club de Bastia
            </div><!--homeTeamName-->
            
            <div id="awayTeamName" class="teamName">
            Paris Saint-Germain
            </div><!--awayTeamName-->
            
            <div id="halfAndTime">
            1st half • 00:00
            </div><!--awayTeamName-->
            
        </div><!--liveUpperContainer-->
        
        <div id="liveRecordContainer">
            
            <div id="lineOfRecord">
                <div id="shootBtn" class="designBtn" onclick="openRightNav()">
                    Shoot(s)
                    <span class="designBtnLine">0 - 0</span>
                </div>
                <div id="turnoverBtn" class="designBtn">
                    Turnover(s)
                    <span class="designBtnLine">0 - 0</span>
                </div>
            </div>
            
            <div id="lineOfRecord">
                <div id="shootBtn" class="designBtn">
                    Foul(s)
                    <span class="designBtnLine">0 - 0</span>
                </div>
                <div id="turnoverBtn" class="designBtn">
                    Crosse(s)
                    <span class="designBtnLine">0 - 0</span>
                </div>
            </div>
            
            <div id="lineOfRecord">
                <div id="shootBtn" class="designBtn">
                    Offside(s)
                    <span class="designBtnLine">0 - 0</span>
                </div>
                <div id="turnoverBtn" class="designBtn">
                    Corner kick(s)
                    <span class="designBtnLine">0 - 0</span>
                </div>
            </div>
            
        </div><!--liveRecord-->

        <div id="startHalfButton">End of 1st period</div>
        
	</body>
</html>