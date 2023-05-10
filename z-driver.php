    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link rel="stylesheet" href="./stylesheets/drivers.css">
        <?php
    include_once 'header.php';

    if(isset($_GET['ID'])){

        require_once './includes/driverDB.inc.php';
        $ID = mysqli_real_escape_string($conn, $_GET['ID']);

        $sql = "SELECT * FROM drivers WHERE driverID='$ID'";
        $result = mysqli_query($conn, $sql) or die();  
        $rowD = mysqli_fetch_array($result);

    }else{
        header('location: ./index.php');
    }
    ?> 
        <title><?php echo $rowD['driverName']?></title>
    </head>
    <body>
        <div class="dynamic-main">
            <div class="title-driver">
                <h1 class="driver-name"><?php echo $rowD['driverName']?></h1>
                <h3 class="gen-info">GENERAL INFORMATION:</h3>
            </div>
            <div class="content-cont">
                <div class="stats">
                    <p><strong>Team:</strong> <?php echo $rowD['driverTeam']?></p>
                    <p><strong>Nationality:</strong> <?php echo $rowD['driverCountry']?></p>
                    <p><strong>Wins:</strong> <?php echo $rowD['driverWins']?></p>
                    <p><strong>Points:</strong> <?php echo $rowD['driverPts'] ?></p>
                    <p><strong>World Championships:</strong> <?php echo $rowD['driverChips']?></p>
                    <p><strong>Pole Positions:</strong> <?php echo $rowD['driverPoles']?></p>
                    <p><strong>First Race:</strong> <?php echo $rowD['driverFirst']?></p>
                </div>
                <div class="image-container">
                    <img class="driver-portrait" src="./images/drivers/<?php echo $rowD['driverImg']?>" alt="">
                </div>
            </div>
            
        </div>
    </body>
    </html>

