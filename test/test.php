<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <title>autoBackground.js</title>        
        <script type="text/javascript" src="../jquery.js"></script>
        
    </head>
    <body>
        <img id="preview" src="images/test.jpg" />
        <canvas id="myCanvas"/>
        <canvas id="newCanvas"/>
        <script type="text/javascript">

            $("#preview").load(function(){
                //get image
                var image = document.getElementById("preview");
                var canvas = convertImageToCanvas(image);

                console.log(convertCanvasToImage(canvas));

                // Converts image to canvas; returns new canvas element
                function convertImageToCanvas(image) {
                    var canvas = document.createElement("canvas");
                    canvas.width = image.width;
                    canvas.height = image.height;
                    canvas.getContext("2d").drawImage(image, 0, 0);

                    return canvas;
                }

                // Converts canvas to an image
                function convertCanvasToImage(canvas) {
                    var image = new Image();
                    image.src = canvas.toDataURL("image/png");
                    return image;
                }
            });
        </script>
    </body>
</html>


