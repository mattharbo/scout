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
        
            <div id="rightMenuDismissBtn" onclick="closeRightNav()">Dismiss</div>
            
            <div id="rightMenuSubmitBtn" onclick="submitRightNav();">Submit</div>
        
        </div><!--rightNav-->
        
		<div id="header">
            
            <a href="/" class="logo" id="logo_header">scout</a>
            
        </div><!--Header-->
        
        <div id="scoreContainer">0 - 1
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
            1st half - 00:00
            </div><!--awayTeamName-->
            
        </div><!--liveUpperContainer-->
        
        <div id="statsContainer">
            
            <!--########### FIRST LINE ###########-->
            <div id="statLine">
                
                <div id="dynamicStatShootHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatShootAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHomeShoot" class="score">
                        <div id="pourcentage">(0%)</div>
                        0
                    </div><!--scoreHome-->
                    
                    <div id="scoreAwayShoot" class="score" onClick="openRightNav()">
                        0
                        <div id="pourcentage">(0%)</div>
                    </div><!--scoreAway-->
                    
                    <div id="scoreLabelLine">
                    Shoot(s)<span class="scoreLabelLine">(On target)</span>
                    </div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END FIRST LINE ###########-->
            
            <!--########### FIRST LINE BIS ###########-->
            <div id="statLine">
                
                <div id="dynamicStatSaveHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatSaveAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHomeSave" class="score" onClick="alertSave()">0</div><!--scoreHome-->
                    
                    <div id="scoreAwaySave" class="score" onClick="alertSave()">0</div><!--scoreAway-->
                    
                    <div id="scoreLabel">Save(s)</span></div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END FIRST LINE BIS ###########-->
            
            <!--########### SEDOND LINE ###########-->
            <div id="statLine">
                
                <div id="dynamicStatCrossHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatCrossAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHomeCross" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreHome-->
                    
                    <div id="scoreAwayCross" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreAway-->
                    
                    <div id="scoreLabel">Crosse(s)</span></div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END SEDOND LINE ###########-->
        
            <!--########### SECOND LINE BIS ###########-->
            <div id="statLine">
                
                <div id="dynamicStatCornerHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatCornerAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHomeCorner" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreHome-->
                    
                    <div id="scoreAwayCorner" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreAway-->
                    
                    <div id="scoreLabel">Corner Kick(s)</span></div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END SECOND LINE BIS ###########-->
        
            <!--########### THIRD LINE ###########-->
            <div id="statLine">
                
                <div id="dynamicStatFoulHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatFoulAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHomeFoul" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreHome-->
                    
                    <div id="scoreAwayFoul" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreAway-->
                    
                    <div id="scoreLabel">Foul(s)</span></div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END THIRD LINE ###########-->
    
            <!--########### FIRST LINE ###########-->
            <div id="statLine">
                
                <div id="dynamicStatCardHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatCardAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHomeFoul" class="score">
                        <div id="doubleFigure">0 /</div> 0
                    </div><!--scoreHome-->
                    
                    <div id="scoreAwayFoul" class="score">
                        0 / <div id="doubleFigure">0</div>
                    </div><!--scoreAway-->
                    
                    <div id="scoreLabelLine">
                        Cards(s)<span class="scoreLabelLine">(Yellow / Red)</span>
                    </div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END FIRST LINE ###########-->
    
            <!--########### FIFTH LINE ###########-->
            <div id="statLine">
                
                <div id="dynamicStatOffsideHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatOffsideAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHomeOffside" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreHome-->
                    
                    <div id="scoreAwayOffside" class="score" onClick="openRightNav();addUnit(this)">0</div><!--scoreAway-->
                    
                    <div id="scoreLabel">Offside(s)</span></div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END FIFTH LINE ###########-->
            
            
        </div><!--liveUpperContainer-->

        <div id="startHalfButton">Start game</a>
        
        
	</body>
</html>