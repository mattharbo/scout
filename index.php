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
        
        <div id="rightNav" class="rightNavContainer">
        
            <a href="javascript:void(0)" class="rightMenuDismissBtn" onclick="closeRightNav()">Dismiss</a>
        
        </div><!--rightNav-->
        
		<div id="header">
            
            <a href="/" class="logo" id="logo_header">scout</a>
            
<!--            <span id="rightMenuOpener" onClick="openRightNav()">&#128513;</span>-->
            
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
            1st half - 32:10
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
                    
                    <div id="scoreHome" class="score">
                        <div id="pourcentage">(0%)</div>
                        0
                    </div><!--scoreHome-->
                    
                    <div id="scoreAway" class="score">
                        0
                        <div id="pourcentage">(0%)</div>
                    </div><!--scoreAway-->
                    
                    <div id="scoreLabelLine">
                    Shoot(s)<span class="scoreLabelLine">(On target)</span>
                    </div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END FIRST LINE ###########-->
            
            
            <!--########### SEDOND LINE ###########-->
            <div id="statLine">
                
                <div id="dynamicStatCrossHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatCrossAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHome" class="score">0</div><!--scoreHome-->
                    
                    <div id="scoreAway" class="score">0</div><!--scoreAway-->
                    
                    <div id="scoreLabel">Crosse(s)</span></div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END SEDOND LINE ###########-->
            
            <!--########### THIRD LINE ###########-->
            <div id="statLine">
                
                <div id="dynamicStatFoulHome" class="dynamicClassHome">
                </div><!--statColHome-->
                
                <div id="dynamicStatFoulAway" class="dynamicClassAway">
                </div><!--statColAway-->
                
                <div id="figureContainer">
                    
                    <div id="scoreHome" class="score">0</div><!--scoreHome-->
                    
                    <div id="scoreAway" class="score">0</div><!--scoreAway-->
                    
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
                    
                    <div id="scoreHome" class="score">
                        <div id="doubleFigure">0 / </div>0
                    </div><!--scoreHome-->
                    
                    <div id="scoreAway" class="score">
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
                    
                    <div id="scoreHome" class="score">0</div><!--scoreHome-->
                    
                    <div id="scoreAway" class="score">0</div><!--scoreAway-->
                    
                    <div id="scoreLabel">Offside(s)</span></div><!--scoreLabel-->
                    
                </div><!--figureContainer-->
                
            </div><!--statLine-->
            <!--########### END FIFTH LINE ###########-->
            
            
        </div><!--liveUpperContainer-->

        <div id="startHalfButton" onClick="openRightNav()">Start game</a>
        
        
	</body>
</html>