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
    <div class="main-body">
        <div class="namensearch">
            <p class="drivers">Meet the Drivers</p>
            <form class="search" action="drivers.php" method="POST">
                <input type="text" name="search" placeholder="Search for Driver">
                <input type="submit" value="Search">
            </form>

        </div>
        <div class="grid">
            <?php 
        require_once './includes/driverDB.inc.php';
        $resultsPage = 6;

        $sql = "SELECT * FROM drivers";
        $result = mysqli_query($conn, $sql);  
        $numResults = mysqli_num_rows($result);

        $numPages = ceil($numResults / $resultsPage);

        if(!isset($_GET['page'])){
            $page = 1;
        }else{
            $page = $_GET['page'];
        }

            if(isset($_POST['search'])){
                $searchDriver = $_POST['search'];
                $sql = "SELECT * FROM drivers WHERE driverName LIKE '%$searchDriver%'";

                $result = mysqli_query($conn, $sql) or die();
                $count = mysqli_num_rows($result);
                if($count == 0){
                    echo '<p class="no-search">No search results.</p>';
                }else{
                    while($row1 = mysqli_fetch_assoc($result)){
                        echo '<div class="col">
                                    <div>
                                        <img class="'. $row1['driverFondo'] .'" src="./images/drivers/'. $row1['driverImg'].'" alt="" />
                                    </div>
                                    <div class="indep-driver">
                                        <p class="name">'. $row1['driverName'].'</p>
                                        <button type="button"><a class="view-stats" href="./z-driver.php?ID='. $row1['driverID'].'">View Stats</a></button>
                                        </div>
                                </div>';
                    }
                }
            
        }else{
            $firstResult = ($page - 1) * $resultsPage; 

            $sql = "SELECT * FROM drivers LIMIT $firstResult ,6 ";
            $result = mysqli_query($conn, $sql);
    
            while($row1 = mysqli_fetch_assoc($result)){
                echo '<div class="col">
                            <div>
                                <img class="'. $row1['driverFondo'] .'" src="./images/drivers/'. $row1['driverImg'].'" alt="" />
                            </div>
                            <div class="indep-driver">
                                <p class="name">'. $row1['driverName'].'</p>
                                <button type="button"><a class="view-stats" href="./z-driver.php?ID='. $row1['driverID'].'">View Stats</a></button>
                                </div>
                        </div>';
            }
            echo '</div>
                    <div class="footer-pages">';
        
        
            for($page=1; $page<=$numPages; $page++){
                echo '<a class="pages" href="drivers.php?page='. $page.'">'. $page .' </a>';

        } 
        }
        ?>
        
        </div>
    </div>
</body>