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

    <title>Drivers - The Fangio Project</title>
</head>

<body>
        <p class="drivers">Meet the Drivers</p>

        <?php 
        require_once './includes/driverDB.inc.php';

        $sql = "SELECT * FROM drivers";
        $result = mysqli_query($conn, $sql) or die();  
        $row = mysqli_fetch_array($result);
        $number_of_results = mysqli_num_rows($result);

        while($row){
            echo $row['driverID'] .' '. $row['driverName'] . '<br>';
        }        
        $results_per_page = 6;

        ?>

</body>