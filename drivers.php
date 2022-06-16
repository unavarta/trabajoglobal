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
    require_once './includes/driverDB.inc.php';

    $sql = "SELECT * FROM drivers";
    $result = mysqli_query($conn, $sql) or die();
    ?>

    <title>Drivers - The Fangio Project</title>
</head>
<div class="main-body">
    <p class="drivers">Meet the Drivers</p>
    <div class="grid">
        <div class="col">
            <div>
                <img class="fer" src="./images/drivers/Lechair.png" alt="" />
            </div>
            <div class="indep-driver">
                <p class="name">Charles Leclerc <br />#16</p>
                <button onclick="location.href='z-driver.php?ID=1'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <div>
                <img class="bul" src="./images/drivers/Versta.png" alt="" />
            </div>
            <div class="indep-driver">
                <p class="name">Max Verstappen <br />#1</p>
                <button onclick="location.href='z-driver.php?ID=2'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="bul" src="./images/drivers/Chequi.png" alt="" />
            <div class="indep-driver">
                <p class="name">Checo Perez<br />#11</p>
                <button onclick="location.href='z-driver.php?ID=3'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="mer" src="./images/drivers/George.png" alt="" />
            <div class="indep-driver">
                <p class="name">George Russell<br />#63</p>
                <button onclick="location.href='z-driver.php?ID=4'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="fer" src="./images/drivers/Carleto.png" alt="" />
            <div class="indep-driver">
                <p class="name">Carlos Sainz Jr.<br />#55</p>
                <button onclick="location.href='z-driver.php?ID=5'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="mer" src="./images/drivers/Lewis.png" alt="" />
            <div class="indep-driver">
                <p class="name">Lewis Hamilton<br />#44</p>
                <button onclick="location.href='z-driver.php?ID=6'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="mc" src="./images/drivers/Lando.png" alt="" />
            <div class="indep-driver">
                <p class="name">Lando Norris<br />#4</p>
                <button onclick="location.href='z-driver.php?ID=7'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="alfa" src="./images/drivers/Valtteri.png" alt="" />
            <div class="indep-driver">
                <p class="name">Valtteri Bottas<br />#77</p>
                <button onclick="location.href='z-driver.php?ID=8'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="ren" src="./images/drivers/Esteban.png" alt="" />
            <div class="indep-driver">
                <p class="name">Esteban Ocon<br />#31</p>
                <button onclick="location.href='z-driver.php?ID=9'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="haas" src="./images/drivers/KMag.png" alt="" />
            <div class="indep-driver">
                <p class="name">Kevin Magnussen<br />#20</p>
                <button onclick="location.href='z-driver.php?ID=10'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="mc" src="./images/drivers/Ric.png" alt="" />
            <div class="indep-driver">
                <p class="name">Daniel Ricciardo<br />#3</p>
                <button onclick="location.href='z-driver.php?ID=11'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="tauri" src="./images/drivers/Yuki.png" alt="" />
            <div class="indep-driver">
                <p class="name">Yuki Tsunoda<br />#22</p>
                <button onclick="location.href='z-driver.php?ID=12'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="tauri" src="./images/drivers/Pierre.png" alt="" />
            <div class="indep-driver">
                <p class="name">Pierre Gasly<br />#10</p>
                <button onclick="location.href='z-driver.php?ID=13'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="aston" src="./images/drivers/Seb.png" alt="" />
            <div class="indep-driver">
                <p class="name">Sebastian Vettel<br />#5</p>
                <button onclick="location.href='z-driver.php?ID=14'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="will" src="./images/drivers/Alex.png" alt="" />
            <div class="indep-driver">
                <p class="name">Alex Albon<br />#23</p>
                <button onclick="location.href='z-driver.php?ID=15'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="ren" src="./images/drivers/Nano.png" alt="" />
            <div class="indep-driver">
                <p class="name">Fernando Alonso<br />#14</p>
                <button onclick="location.href='z-driver.php?ID=16'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="aston" src="./images/drivers/Stroll.png" alt="" />
            <div class="indep-driver">
                <p class="name">Lance Stroll<br />#18</p>
                <button onclick="location.href='z-driver.php?ID=17'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="alfa" src="./images/drivers/Zhou.png" alt="" />
            <div class="indep-driver">
                <p class="name">Guanyu Zhou<br />#24</p>
                <button onclick="location.href='z-driver.php?ID=18'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="haas" src="./images/drivers/Mick.png" alt="" />
            <div class="indep-driver">
                <p class="name">Mick Schumacher<br />#47</p>
                <button onclick="location.href='z-driver.php?ID=19'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="aston" src="./images/drivers/Hulk.png" alt="" />
            <div class="indep-driver">
                <p class="name">Nico Hulkenberg<br />#27</p>
                <button onclick="location.href='z-driver.php?ID=20'" type="button">View Stats</button>
            </div>
        </div>
        <div class="col">
            <img class="will" src="./images/drivers/Nick.png" alt="" />
            <div class="indep-driver">
                <p class="name">Nicholas Latifi<br />#6</p>
                <button onclick="location.href='z-driver.php?ID=21'" type="button">View Stats</button>
            </div>
        </div>
    </div>
    </body>

</html>