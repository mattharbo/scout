<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
		
        <link rel="stylesheet" href="../css/interface.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body>
        
        <!-- Preloader -->
        <div id="preloader"></div>
        
        <!--############# Form Step 3 #############-->
        
        <div id="formStepThree" class="formNextContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">New game</div>
            </div>

            <div id="titleStepTwo" class="dataLabel">Game details</div>

            <div id="field">
                <div id="fieldCompetition" class="fieldName">Competition name</div>
                <input type="text" id="fieldCompetitionContent" class="fieldContent" placeholder="Competition name" maxlength="40" onclick="getfocus(this, fieldCompetition)">
            </div>

            <div id="field">
                <div id="fieldCompetitionStep" class="fieldName">Competition stage</div>
                <input type="text" id="fieldCompetitionStepContent" class="fieldContent" placeholder="Competition stage" maxlength="20" onclick="getfocus(this, fieldCompetitionStep)">
            </div>
            
            <div id="field">
                
                 <div id="fieldMonth">
                    <div id="fieldMonthId" class="fieldName">Month</div>
                    <select id="fieldMonthIdContent" class="selectMonth" onclick="getfocus(this, fieldMonthId)">
                        <option selected>Month</option>
                        <?php
                        for($m=1;$m<=12;$m++){
                            $monthName = date('F', mktime(0, 0, 0, $m, 10));
                            echo "<option value='".$monthName."'>".$monthName."</option>";
                        }?>
                    </select>
                </div>
                
                <div id="fieldDay">
                    <div id="fieldDayId" class="fieldName">Day</div>
                    <input type="text" pattern="[0-9]*" id="fieldDayIdContent" class="fieldDay" placeholder="Day" maxlength="2" onclick="getfocus(this, fieldDayId)">
                </div>
                
                <div id="fieldYear">
                    <div id="fieldYearId" class="fieldName">Year</div>
                    <input type="text" pattern="[0-9]*" id="fieldYearIdContent" class="fieldYear" placeholder="Year" maxlength="4" onclick="getfocus(this, fieldYearId)">
                </div>
                     
            </div>
            
            <div id="field">
                <div id="fieldHour">
                    <div id="fieldHourId" class="fieldName">Hour</div>
                    <select id="fieldHourIdContent" class="selectMonth" onclick="getfocus(this, fieldHourId)">
                        <option selected>Hour</option>
                        <?php
                        for($h=0;$h<=23;$h++){
                            if($h<=9){
                                $h="0".$h;
                            }
                            echo "<option value='".$h."'>".$h."</option>";
                        }?>
                    </select>
                </div>
                
                <div id="fieldMinute">
                    <div id="fieldMinuteId" class="fieldName">Minute</div>
                    <select id="fieldMinuteIdContent" class="selectMonth" onclick="getfocus(this, fieldMinuteId)">
                        <option selected>Minute</option>
                        <?php
                        for($s=0;$s<=59;$s++){
                            if($s<=9){
                                $s="0".$s;
                            }
                            echo "<option value='".$s."'>".$s."</option>";
                        }?>
                    </select>
                </div>
                
            </div>
            
            <div id="previousForm" class="formBtn" onclick="">Previous</div>

            <div id="submissionForm" class="formBtn" onclick="submitNewGame(), form_ajax_post('../script/newgame.php')">Submit</div>

        </div>
        
        <!--############# Form Step 2 #############-->
        <div id="formStepTwo" class="formNextContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <div id="pageTitleNoValidation">New game</div>
            </div>

            <div id="titleStepTwo" class="dataLabel">Away team information</div>

            <div id="field">
                <div id="fieldNameAway" class="fieldName">Full name</div>
                <input type="text" id="fieldNameAwayContent" class="fieldContentAway" placeholder="Full name" maxlength="25" onclick="getfocus(this, fieldNameAway)">
            </div>

            <div id="field">
                <div id="fieldHashAway" class="fieldName">Short name</div>
                <input type="text" id="fieldHashAwayContent" class="fieldContent" placeholder="Short name" maxlength="5" onclick="getfocus(this, fieldHashAway)">
            </div>
            
            <div id="previousForm" class="formBtn" onclick="">Previous</div>

            <div id="submissionForm" class="formBtn" onclick="goToStepThree('formStepThree')">Next</div>

        </div>
        
        <!--############# Form Step 1 #############-->
        
        <div id="header">
                <div id="closePageBtn" onclick="closeWindow('../');"></div>
                <div id="pageTitleNoValidation">New game</div>
            </div>
        
        <div id="titleStepOne" class="dataLabel">Home team information</div>
        
        <div id="field">
            <div id="fieldNameHome" class="fieldName">Full name</div>
            <input type="text" id="fieldNameHomeContent" class="fieldContentHome" placeholder="Full name" maxlength="25" onclick="getfocus(this, fieldNameHome)">
        </div>
        
        <div id="field">
            <div id="fieldHashHome" class="fieldName">Short name</div>
            <input type="text" id="fieldHashHomeContent" class="fieldContent" placeholder="Short name" maxlength="5" onclick="getfocus(this, fieldHashHome)">
        </div>
        
        <div id="submissionForm" class="formBtn" onclick="goToStepTwo('formStepTwo')">Next</div>
        
         <!--############# SCRIPTS #############-->
        
        <script type="text/javascript" src="../js/jquery-latest.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#preloader').fadeOut('slow',function(){$(this).remove();});

            });
       </script>
        <script type="text/javascript" src='../js/creationform.js'></script>
        
        
        <!-- For autocomplete-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
        <script type="text/javascript">
            
        var newhometeamid="";
        var newawayteamid="";

        $(function() {

            //autocompleteHomeTeamName
            $(".fieldContentHome").autocomplete({
                source: "../script/autocompletesearch.php",
                minLength: 1,
                select: function (event, ui) {
                    event.preventDefault();
                    $("#fieldNameHomeContent").val(ui.item.label);
                    $("#fieldHashHomeContent").val(ui.item.value2);

                    newhometeamid=ui.item.value;
                }
            });
            
            //autocompleteAwayTeamName
            $(".fieldContentAway").autocomplete({
                source: "../script/autocompletesearch.php",
                minLength: 1,
                select: function (event, ui) {
                    event.preventDefault();
                    $("#fieldNameAwayContent").val(ui.item.label);
                    $("#fieldHashAwayContent").val(ui.item.value2);
                    
                    newawayteamid=ui.item.value;
                }
            });	

        });
        </script>

	</body>
</html>