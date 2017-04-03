    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen">

        <script type="text/javascript" src="css/jquery-1.11.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Josefin+Sans|Questrial|Raleway|Titillium+Web" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">
        <title>WEATHER MOOD</title>


    </head>

    <body>


        <h2>Weather Mood</h2>
        <form class="form" method="POST" action="wheather.php">
            <div class="formulaire">
                <h2>
                    <label>Votre ville</label>
                </h2>
                <input class="ville" type="text" name="ville" placeholder="Votre Ville">

                <input type="submit" id="button" name="weather" class="bouton" value="Envoyer">
            </div>
        </form>



    </body>

    </html>