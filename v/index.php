<?
if (isset ($_GET["id"])) {
?>
<script>
    var gameidfromphp = <?php echo $_GET["id"]?>;
</script>
<?
    
} else { 
    header('Location: ../404/');
}
?>
<html lang="en">
	<head>
		<title>Scout • By scouters for players</title>
    
        <link rel="stylesheet" href="../css/interface.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
<!--		<link rel="icon" href="./img/favicon.png">-->
        <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body>

    <!-- ~ Preloader ~ -->
    <div id="preloader"></div>
        
    <!-- ~ DEFAULT VIEW ~ -->    
    <div id="header">
        <div id="closePageBtn" onclick="closeWindow('../');"></div>
        <div id="pageTitleNoValidation">Title to defined</div>
    </div>
        
    <div id="pitchContainerDataviz" class="pitchcontainerclass">
    </div>
        
    <!-- ~ SCRIPTS ~ -->
        
    <script type="text/javascript" src="../js/jquery-latest.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#preloader').fadeOut('slow',function(){$(this).remove();});
        });
    </script>
    <script type="text/javascript" src='../js/vizpage.js'></script>
        
	</body>
</html>