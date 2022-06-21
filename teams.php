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

    <title>Teams - The Fangio Project</title>
</head>

<body>

    <div class="main-body">
        <p class="drivers">Meet the Teams</p>

        <div class="grid">
            <div class="col">
                <div>
                    <img class="fer" src="./images/teams/fe.png" alt="" />
                </div>
                <div class="indep-driver">
                    <p class="name">Ferrari<br />Italy</p>
                    <button onclick="location.href='z-team.php?ID=1'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <div>
                    <img class="bul" src="./images/teams/red bull.png" alt="" />
                </div>
                <div class="indep-driver">
                    <p class="name">Red Bull<br />Austria</p>
                    <button onclick="location.href='z-team.php?ID=2'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img class="mer" src="./images/teams/mb.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Mercedes-Benz<br />Germany</p>
                    <button onclick="location.href='z-team.php?ID=3'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img src="./images/teams/mc.png " alt="" />
                <div class="indep-driver">
                    <p class="name">McLaren<br />England</p>
                    <button onclick="location.href='z-team.php?ID=4'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img class="alfa" src="./images/teams/alfa.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Alfa Romeo<br />Italy</p>
                    <button onclick="location.href='z-team.php?ID=5'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img class="mer" src="./images/teams/logo-alpine-f1-2021.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Alpine<br />France</p>
                    <button onclick="location.href='z-team.php?ID=6'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img class="mer" src="./images/teams/fb_launch_negative_big.jpg" alt="" />
                <div class="indep-driver">
                    <p class="name">AlphaTauri<br />Italy</p>
                    <button onclick="location.href='z-team.php?ID=7'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img class="hhh" src="./images/teams/haas-f1-team-logo.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Haas<br />United States</p>
                    <button onclick="location.href='z-team.php?ID=8'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img class="mer" src="./images/teams/logo-aston-martin-f1-2021.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Aston Martin<br />England</p>
                    <button onclick="location.href='z-team.php?ID=9'" type="button">View Stats</button>
                </div>
            </div>
            <div class="col">
                <img class="mer" src="./images/teams/logo-williams-f1-2021.png" alt="" />
                <div class="indep-driver">
                    <p class="name">Williams<br />England</p>
                    <button onclick="location.href='z-team.php?ID=10'" type="button">View Stats</button>
                </div>
            </div>

        </div>
</body>
</html>