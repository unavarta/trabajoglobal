<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylesheets/login.css" />
    <title>Login - The Fangio Project</title>
  </head>
  <body>
    <nav>
      <a class="go-back" href="./index.php">Go Back</a>
    </nav>
    <div class="main-title">
      <h1>LOG IN.</h1>
    </div>

    <div class="main-body">

    <form action="./includes/login.inc.php" method="post">
      <label class="label" for="#mail">Username or Email</label>
      <br />
      <input class="input-box" type="text" name="uid" id="#mail" />
      <br />
      <br>
      <label class="label" for="#pass">Password</label>
      <br />
      <input class="input-box" type="password" name="pwd" id="#pass" />
      <br />
      <br>
      <button class="login" type="submit" name="submit">Log In</button>
      </form>
      <br>
      <br>
      <a class="go-back" href="./signup.php">Create Account</a>
    <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo '<script> alert("Fill in all fields!");</script>';
    }
    if($_GET["error"] == "wronglogin"){
      echo "<script>alert('Wrong password or username.')</script>";
    }
  }
?>
</div>
  </body>
</html>
