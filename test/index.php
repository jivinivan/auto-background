<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <title>jquery.autoBackground.js</title>
        
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="../jquery.autoBackground.js"></script>
    </head>
    <body>
        <img id="preview" src="images/test.jpg" />
        <script type="text/javascript">
            $(document).ready(function() {
                $("img").autoBackground();
            });
        </script>
    </body>
</html>


