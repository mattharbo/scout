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
        
        <div id="rightNavContainer">
            
            <div id="header">
            
                Foul
            
            </div><!--Header-->
            
            <div id="rightNavMainContent">MHA</div>
        
            <div id="rightMenuDismissBtn" onclick="closeRightNav()">Dismiss</div>
            
            <div id="rightMenuSubmitBtn" onclick="submitRightNav();">Submit</div>
        
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