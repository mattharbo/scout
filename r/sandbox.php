<html lang="en">
    <head>
        <title>Scout • By scouters for players</title>
    
        <link rel="stylesheet" href="../css/interface.css">
        <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'> -->
<!--        <link rel="icon" href="./img/favicon.png">-->
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

    <!-- ~ OFFSIDE CONTAINER ~ -->
        <div id="offsideNavContainer" class="navContainer">
            
            <div id="header">
                <div id="closePageBtn" onclick="closeRightNav();"></div>
                <!-- <div id="pageTitle">Offside</div> -->
                <div id="pageTitleNoValidation">Offside</div>
                <!-- <div id="validationPageBtn" onclick="submitRightNav();event_ajax_post('../script/postevent.php');"></div> -->
            </div>

            <div id="proposalTitle">4 • 4 • 2 Formation</div>
            
            <div id="pitchContainerSquad" class="pitchcontainerdatavizclass">

                <div id="playercontainer" style="top:10%;left:25%">
                    <div id="playerbubble" class="playernumber">32</div>
                    <div id="playerdescr" class="playername">HARBONNIER</div>
                </div>

                <div id="playercontainer" style="top:10%;left:54%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:30%;left:72%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:30%;left:8%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:33%;left:29%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:33%;left:50%">
                    <div id="playerbubble" class="playernumber">6</div>
                    <div id="playerdescr" class="playername">INIESTA</div>
                </div>

                <div id="playercontainer" style="top:55%;left:72%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:55%;left:8%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:58%;left:29%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:58%;left:50%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">STRIKER</div>
                </div>

                <div id="playercontainer" style="top:80%;left:39.5%">
                    <div id="playerbubble" class="positionicon"></div>
                    <div id="playerdescr" class="positionname">GOAL KEEPER</div>
                </div>

            </div>
            
        </div>  

    <script type="text/javascript" src="../lib/jquery-latest.js"></script>
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#preloader').fadeOut('slow',function(){$(this).remove();});

            });
       </script> 
    </body>
</html>