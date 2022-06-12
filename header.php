<?php
  session_start();
?>


  <body>
    <nav>
      <div>
        <h2 class="fangio-logo">The Fangio Project</h2>
      </div>
      <div class="center-menu">
        <a class="links" href="./index.php">Home</a>
        <a class="links" href="./drivers.php">Drivers</a>
        <a class="links" href="./teams.php">Teams</a>
        <a class="links" href="">GPs</a>
      </div>
      
      <?php
      if(isset($_SESSION["usersname"])){
        echo '<div class="right-side">';
        echo '<a class="links" href="./profile.php?user=' . $_SESSION["usersname"] .''.'"> '. $_SESSION["usersname"] .' </a>';
        echo '<a class="links" href="./includes/logout.inc.php">Log Out</a>';
        echo '</div>';
      }
      else{
        echo '<div class="right-side">';
        echo '<a class="links" href="login.php"><i class="small material-icons">person</i></a>';
        echo '</div>';
      }
      ?>
      
    </nav>
