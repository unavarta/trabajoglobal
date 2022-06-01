<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="stylesheets/login.css" />
  <title>Sign Up - The Fangio Project</title>
</head>

<body>
  <nav>
    <a class="go-back" href="./index.php">Go Back</a>
  </nav>
  <div class="main-title">
    <h1>Sign Up.</h1>
  </div>

  <div class="main-body">

    <form action="./includes/signup.inc.php" method="post" >
      <!-- este es el correo -->
      <label class="label" for="#mail">Mail</label>
      <br />
      <input class="input-box" type="text" name="mail" id="#mail" />
      <br />
      <br>
      <!-- este es el username -->
      <label class="label" for="#mail">Username</label>
      <br />
      <input class="input-box" type="text" name="user" id="#username" />
      <br>
      <br>
      <!-- este es la contrase;a -->
      <label class="label" for="#pass">Password</label>
      <br />
      <input class="input-box" type="password" name="pass" id="#pass" />
      <br>
      <br>
      <label class="label" for="#passrpt">Repeat Password</label>
      <br />
      <input class="input-box" type="password" name="passRepeat" id="#passrpt" />
      <br>
      <br />
      <button class="login" type="submit" name="submit">Sign Up</button>
    </form>
    
    <br>
    <br>
    <a class="go-back" href="./login.php">Already have an account?</a>
    <br>
    <br>
    
    <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!</p>";
    }
    if($_GET["error"] == "invaliduid"){
      echo "<p>Invalid Username. Pick a different one.</p>";
    }
    if($_GET["error"] == "invalidmail"){
      echo "<p>Invalid Mail. Choose a proper mail.</p>";
    }
    if($_GET["error"] == "passnomatch"){
      echo "<p>Passwords don't match.</p>";
    }
    if($_GET["error"] == "usernametaken"){
      echo "<p>Username is taken. Pick another one.</p>";
    }
    if($_GET["error"] == "stmtfail"){
      echo "<p>Something went wrong!</p>";
    }
    if($_GET["error"] == "none"){
      echo "<p>You have signed up!</p>";
    }
  }


?>
  </div>





</body>

</html>