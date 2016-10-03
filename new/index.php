<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
		
        <link rel="stylesheet" href="../css/interface.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>

<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="./ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body>
        
        <!-- Preloader -->
        <div id="preloader"></div>
        
        <div id="header">
            <div id="closePageBtn" onclick="closeRightNav();"></div>
            <div id="pageTitleNoValidation">New game</div>
        </div>
        
        <div id="newTeamNameContainer">
            <div id="newTeamNameHome" class="formTeamName">hh</div>
            <div id="versusCol" class="versusTeamName">VS.</div>
            <div id="newTeamNameAway" class="formTeamName">aa</div>
        </div>
        
        
        <!--############# Form Step 3 #############-->
        <div id="formStepThree" class="formNextContainer">

            <div id="titleStepTwo" class="dataLabel">Game details</div>

            <div id="field">
                <div id="fieldCompetition" class="fieldName">Competition name</div>
                <input type="text" id="fieldCompetitionContent" class="fieldContent" placeholder="Competition name" maxlength="40" onclick="getfocus(this, fieldCompetition)">
            </div>

            <div id="field">
                <div id="fieldCompetitionStep" class="fieldName">Competition step</div>
                <input type="text" id="fieldCompetitionStepContent" class="fieldContent" placeholder="Competition Step" maxlength="20" onclick="getfocus(this, fieldCompetitionStep)">
            </div>
            
            <div id="fieldWithSelect">
                
                <select class="selectMonth">
                    <option selected>Month</option>
                    <?php
                    for($m=1;$m<=12;$m++){
                        $monthName = date('F', mktime(0, 0, 0, $m, 10));
                        echo "<option value='".$monthName."'>".$monthName."</option>";
                    }
                    ?>
                </select>
                     
            </div>
            
            <div id="previousForm" class="formBtn" onclick="">Previous</div>

            <div id="submissionForm" class="formBtn" onclick="stepThree('formStepThree')">Next</div>

        </div>
        
        <!--############# Form Step 2 #############-->
        <div id="formStepTwo" class="formNextContainer">

            <div id="titleStepTwo" class="dataLabel">Away team information</div>

            <div id="field">
                <div id="fieldNameAway" class="fieldName">Full name</div>
                <input type="text" id="fieldNameAwayContent" class="fieldContent" placeholder="Full name" maxlength="25" onclick="getfocus(this, fieldNameAway)">
            </div>

            <div id="field">
                <div id="fieldHashAway" class="fieldName">Short name</div>
                <input type="text" id="fieldHashAwayContent" class="fieldContent" placeholder="Short name" maxlength="4" onclick="getfocus(this, fieldHashAway)">
            </div>
            
            <div id="previousForm" class="formBtn" onclick="">Previous</div>

            <div id="submissionForm" class="formBtn" onclick="stepThree('formStepThree')">Next</div>

        </div>
        
        <!--############# Form Step 1 #############-->
        
        <div id="titleStepOne" class="dataLabel">Home team information</div>
        
        <div id="field">
            <div id="fieldNameHome" class="fieldName">Full name</div>
            <input type="text" id="fieldNameHomeContent" class="fieldContent" placeholder="Full name" maxlength="25" onclick="getfocus(this, fieldNameHome)">
        </div>
        
        <div id="field">
            <div id="fieldHashHome" class="fieldName">Short name</div>
            <input type="text" id="fieldHashHomeContent" class="fieldContent" placeholder="Short name" maxlength="4" onclick="getfocus(this, fieldHashHome)">
        </div>
        
        <div id="submissionForm" class="formBtn" onclick="stepTwo('formStepTwo')">Next</div>
        
         <!--############# SCRIPTS #############-->
        
        <script type="text/javascript" src="../js/jquery-latest.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#preloader').fadeOut('slow',function(){$(this).remove();});

            });
       </script>
        <script type="text/javascript" src='../js/creationform.js'></script>


	</body>
</html>