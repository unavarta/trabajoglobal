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
        <div class="namensearch">
            <p class="drivers">Meet the Teams</p>
            <form class="search" action="teams.php" method="POST">
                <input type="text" name="search" placeholder="Search for Team">
                <input type="submit" value="Search">
            </form>
        </div>

        <div class="grid">
            <?php 
        require_once './includes/driverDB.inc.php';
        $resultsPage = 4;

        $sql = "SELECT * FROM teams";
        $result = mysqli_query($conn, $sql);  
        $numResults = mysqli_num_rows($result);

        $numPages = ceil($numResults / $resultsPage);

        if(!isset($_GET['page'])){
            $page = 1;
        }else{
            $page = $_GET['page'];
        }
     
        if(isset($_POST['search'])){
            $searchTeam = $_POST['search'];
            $sql = "SELECT * FROM teams WHERE teamName LIKE '%$searchTeam%'";

            $result = mysqli_query($conn, $sql) or die();
            $count = mysqli_num_rows($result);
            if($count == 0){
                echo '<p class="no-search">No search results.</p>';
            }else{
                while($row1 = mysqli_fetch_assoc($result)){
                    echo    '<div class="col">
                                <div>
                                    <img class="'. $row1['teamClass'] .'" src="./images/teams/'. $row1['teamLOGO'].'" alt="" />
                                </div>
                                <div class="indep-driver">
                                    <p class="name">'. $row1['teamName'].'</p>
                                    <button type="button"><a class="view-stats" href="./z-team.php?ID='. $row1['teamID'].'">View Stats</a></button>
                                </div>
                            </div>';
                }
            }
        
    }else{
        
        $firstResult = ($page - 1) * $resultsPage; 

        $sql = "SELECT * FROM teams LIMIT $firstResult,4 ";
        $result = mysqli_query($conn, $sql);

        while($row1 = mysqli_fetch_assoc($result)){
            echo '<div class="col">
                        <div>
                            <img class="'. $row1['teamClass'] .'" src="./images/teams/'. $row1['teamLOGO'].'" alt="" />
                        </div>
                        <div class="indep-driver">
                            <p class="name">'. $row1['teamName'].'</p>
                            <button type="button"><a class="view-stats" href="./z-team.php?ID='. $row1['teamID'].'">View Stats</a></button>
                            </div>
                    </div>';
        }
        echo '</div>
        <div class="footer-pages">';
        
        for($page=1; $page<=$numPages; $page++){
            echo '<a class="pages" href="teams.php?page='. $page.'">'. $page .' </a>';

        } 
    }
        ?>
    
        </div>
    </div>
    </div>
</body>

</html>