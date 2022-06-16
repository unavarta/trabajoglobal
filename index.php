
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylesheets/styles.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
    <link rel="manifest" href="./images/site.webmanifest" />
    <?php
    include_once 'header.php';
    ?>

    <title>Home - The Fangio Project</title>
  </head>
  <body>
    <div class="main-body">
      <div class="body-left-side">
        <div class="left-container">
          <p>The Home for <br /><u>Formula One's archive.</u></p>
          <p class="body-slogan">
            <em
              >Statistics, analysis and historical events of<br />World's most
              important motorsport.</em
            >
          </p>
          <div class="buttons">
            <button onclick="location.href='z-grandprix.php?ID=7'" type="button">Monaco GP.</button>
            <button onclick="location.href='z-grandprix.php?ID=8'" type="button">Azerbaiyan GP.</button>
          </div>
        </div>
      </div>
      <div class="body-right-side">
        <img class="fangio" src="./images/F1-Fangio.jpg" alt="" />
      </div>
    </div>
    <!-- <div class="footer-container">
      <footer>
        <a class="links" href="">Legal</a>
        <a class="links" href="">Contact</a>
        <a class="links" href="">About Us</a>
      </footer> -->
    </div>
  </body>
</html>
