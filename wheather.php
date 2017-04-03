

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/html">

    <head>
        <meta charset="UTF-8">
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen">

        <script type="text/javascript" src="css/jquery-1.11.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Josefin+Sans|Questrial|Raleway|Titillium+Web" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">
        <title>WEATHER MOOD</title>


    </head>

    <body>


    <h2><a href="index.php">Weather Mood</a> </h2>


    <?php


    $ville=$_POST['ville'];
    $url = "http://api.openweathermap.org/data/2.5/weather?q=".$ville."&APPID=f9a84e4615ae5f9f63b62bf6429e0719&units=metric";
    $contents = file_get_contents($url);
    $clima=json_decode($contents);
    $temp=$clima->main->temp;
    $temp_max=$clima->main->temp_max;
    $temp_min=$clima->main->temp_min;
    $icon=$clima->weather[0]->icon.".png";
    $temp_type=$clima->weather[0]->description; /*selectionne le temps pour deezer */
    $today = date("F j, Y");
    $hour = date("g:i a");
    include ('music.php');
    ?>

    <form class="form">
        <div class="formulaire">
            <h1><?php echo $temp ."&deg;C";?></h1>
            <h3><?php echo $ville;?></h3>
            <h4><?php echo "Min: " . $temp_min ."&deg;C"?></h4>
            <?php echo"<img src='http://openweathermap.org/img/w/" . $icon ."'/ >"?>
            <h5><?php echo  "Max: " . $temp_max ."&deg;C";?></h5>
            <h1><?php echo $hour;?></h1>
            <h3><?php echo $today;?></h3>

        </div>
    </form>

    <script>
        (function(d, s, id) {
            var js, djs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;

            js.src = "http://e-cdn-files.deezer.com/js/widget/loader.js";
            djs.parentNode.insertBefore(js, djs);
        }(document, "script", "deezer-widget-loader"));</script>
    <br/>
    <center>
        <div class="deezer-widget-player"
             data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=true&playlist=false&width=400&height=150&color=007FEB&layout=dark&size=medium&type=tracks&id=<?php echo $morceauListe;?>&app_id=230022" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="400" data-height="90"></div>

    </center>

    </body>
    </html>
