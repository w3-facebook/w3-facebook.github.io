<!Doctype HTML>
<html>
    <head>
    <title>FaceBook</title>
    <link rel="shortcut icon" href="fb-icon.png" type="image/png">
    </head>
    <style>
        *{
            margin:0;
            padding:0;
        }
        div.fb-fullscreen{
           position:relative;
           width:100%;
           height: 100vh;
           margin:0;
        }
        div > iframe{
            width:100%;
            height:100%;
        }
    </style>
    <body>
        <div class="fb-fullscreen">
            <iframe width="560" height="315" src="https://www.youtube.com" title="FaceBook" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                <?php
                    echo "Someting is Wrong!"
                ?>
            </iframe>
        </div>
    </body>
</html>
