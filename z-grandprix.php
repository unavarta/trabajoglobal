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

        $sql = "SELECT * FROM grandprix WHERE gpID='$ID'";
        $result = mysqli_query($conn, $sql) or die();  
        $rowD = mysqli_fetch_array($result);

    }else{
        header('location: ./index.php');
    }
    ?> 
        <title><?php echo $rowD['gpName']?></title>
    </head>
    <body>
        <div class="dynamic-main">
            <div class="title-driver">
                <h1 class="driver-name"><?php echo $rowD['gpName']?></h1>
                <h3 class="gen-info">GENERAL INFORMATION:</h3>
            </div>
            <div class="content-cont">
                <div class="stats">
                    <p><strong>Circuit:</strong> <?php echo $rowD['gpTrack']?></p>
                    <p><strong>First Race:</strong> <?php echo $rowD['gpFirst']?></p>
                    <p><strong>Fastest Lap:</strong> <?php echo $rowD['gpFastlap']?></p>
                    <p><strong>Current Winner:</strong> <?php echo $rowD['gpWinner']?></p>
                    <p><strong>Most Wins:</strong> <?php echo $rowD['gpMostWins'] ?></p>
                </div>
                <div class="image-container">
                    <img class="driver-portrait" src="./images/granprix/<?php echo $rowD['gpImg']?>" alt="">
                </div>
            </div>
            <div class="mmm">
                <h3 class="gen-info">PODIUM FINISH:</h3>
                <div class="numbers">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>PODIUM</th>
                                <th>DRIVER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>FIRST</th>
                                <td><?php echo $rowD['podiumOne'];?></td>
                            </tr>
                            <tr>
                                <th>SECOND</th>
                                <td><?php echo $rowD['podiumTwo'];?></td>
                            </tr>
                            <tr>
                                <th>THREE</th>
                                <td><?php echo $rowD['podiumThree'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </body>
    </html>

