<?php
require_once "dbconnect.php";

if(isset($_POST['submit'])) {
  $nameuser = $_POST['nameuser'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $birthdate = $_POST['birthdate'];

  $sql = "INSERT INTO `users` (`iduser`, `nameuser`, `password`, `firstname`, `surname`, `birthdate`) VALUES (NULL, '$nameuser', '$password', '$firstname', '$surname', '$birthdate')";

  $result = mysqli_query($connection, $sql);

  if($result) {
    header("Location: index.php?msg=New record created succesfully");
  }
  else {
    echo "Failed: " . mysqli_error($connection);
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add User</title>
  </head>
  <body>
    <?php

      require_once("nav.php");

    ?> 
  <div class="container">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted">Complete the form below to add a new user</p>
    </div>
    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">

        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Name user:</label>
            <input type="text" class="form-control" name="nameuser" placeholder="NameUser">
          </div>

          <div class="col">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="firstname" placeholder="Firstname">
          </div>

          <div class="col">
            <label class="form-label">Sur Name:</label>
            <input type="text" class="form-control" name="surname" placeholder="Surname">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Birthdate:</label>
          <input type="date" class="form-control" name="birthdate">
        </div>

        <div>
          <button type="submit" class="btn btn-primary" name="submit">Add user</button>
        </div>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>