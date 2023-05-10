<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="./stylesheets/drivers.css" />
    <?php
  include_once 'header.php';
?>

    <title>GPs - The Fangio Project</title>
</head>

<body>

    <div class="main-body">
        <p class="drivers">The Races</p>

        <div class="grid">
            <div class="col">
                <div>
                    <img class="fer" src="./images/granprix/flags/bahrain.jpg" alt="" />
                </div>
                <div class="indep-driver">
                    <p class="name">Bahrain GP<br />Sakhir</p>
                    <button onclick="location.href='z-grandprix.php?ID=1'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <div>
                    <img class="bul" src="./images/granprix/flags/saudi.jpg" alt="" />
                </div>
                <div class="indep-driver">
                    <p class="name">Saudi Arabian GP<br />Jeddah</p>
                    <button onclick="location.href='z-grandprix.php?ID=2'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img src="./images/granprix/flags/aus.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Australian GP<br/>Melbourne</p>
                    <button onclick="location.href='z-grandprix.php?ID=3'" type="button">View Stats</button>
                </div>
            </div>
            
            <div class="col">
                <img src="./images/granprix/flags/azerbaijan.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Azerbaijan GP<br/>Baku</p>
                    <button onclick="location.href='z-grandprix.php?ID=4'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img src="./images/granprix/flags/miami.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Miami GP<br/>Miami Gardens</p>
                    <button onclick="location.href='z-grandprix.php?ID=5'" type="button">View Stats</button>
                </div>
            </div>
        
        </div>
</body>
</html>