<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autocomplete using PHP/MySQL and jQuery</title>
    
<!--    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">-->

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
</head>
 
<body>

    <div class="ui-widget">
        <label for="skills">Skills: </label>
        <input id="skills">
    </div>
    
    <div id="result"></div>
    
    <script>
    $(function() {
        $( "#skills" ).autocomplete({
            source: 'search.php',
        })

    });
    </script>

</body>
</html>