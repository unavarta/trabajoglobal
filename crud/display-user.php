<?php
include '../includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>User Managment</title>
</head>

<body>
    <div class="container my-5">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Favourite Team</th>
                    <th scope="col">Favourite Driver</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  while ($rowU = mysqli_fetch_assoc($result)) {
   echo '<tr>
        <th scope="row">' .$rowU['usersName'] . '</th>
        <td>' .$rowU['usersMail'] . '</td>
        <td>' .$rowU['favTeam'] . '</td>
        <td>' .$rowU['favDriver'] . '</td>
        <td>
        <button class="btn btn-primary"><a class="text-light" href="update-user.php?updateid='. $rowU['usersID'] .'">UPDATE</a></button>
        <button class="btn btn-danger"><a class="text-light" href="delete-user.php?deleteid='. $rowU['usersID'] .'">DELETE</a></button>
        </td>        
        </tr>';
  }
  ?>

            </tbody>
        </table>
    </div>
</body>

</html>