<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="./stylesheets/drivers.css">
    <?php
include_once 'header.php';

if(isset($_GET['ID'])){ 

    require_once './includes/driverDB.inc.php';
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);

    $sql = "SELECT * FROM teams WHERE teamID='$ID'";
    $result = mysqli_query($conn, $sql) or die();  
    $rowT = mysqli_fetch_array($result);
    
}else{
    header('location: ./index.php');
}
?>

    <title><?php echo $rowT['teamName']?></title>
</head>

<body>
    <div class="team-dynamic-main">
        <div class="title-driver">
            <h1 class="driver-name"><?php echo $rowT['teamName']?></h1>
            <h3 class="gen-info">GENERAL INFORMATION:</h3>
        </div>
        <div class="team-content-cont">
            <div class="team-image-container">
                <img class="team-portrait" src="./images/teams/car/<?php echo $rowT['teamImg']?>" alt="">
            </div>
            <div class="team-stats">
                <p>Headquarters: <?php echo $rowT['teamCountry']?></p>
                <p>Wins: <?php echo $rowT['teamWins']?></p>
                <p>Points: <?php echo $rowT['teamPts'] ?></p>
                <p>World Championships: <?php echo $rowT['teamChips']?></p>
                <p>First Race: <?php echo $rowT['teamFirst']?></p>
            </div>
        </div>
    </div>
</body>

</html>