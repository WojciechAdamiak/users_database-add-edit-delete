<?php
require_once "dbconnect.php";
$id = $_GET['id'];

if(isset($_POST['submit'])) {
$nameusergroup = $_POST['nameusergroup'];
$idusergroup = $_POST['idusergroup'];
$namegroup = $_POST['namegroup'];
 
  $sql = "UPDATE `user_group` SET `nameuser`='$nameusergroup', `iduser`='$idusergroup', `namegroup`='$namegroup' WHERE idgroupassignment = $id";

  $result = mysqli_query($connection, $sql);

  if($result) {
    header("Location: index.php?msg=Data updated succesfully");
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
    <title>Edit group</title>
  </head>
  <body>
    <?php

        require_once("nav.php");

    ?> 
  <div class="container">
    <div class="text-center mb-4">
        <h3>Edit Group Information</h3>
        <p class="text-muted">Click update after changing any information</p>
    </div>
    <?php
    $sql = "SELECT * FROM `user_group` WHERE iduser = $id LIMIT 1";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Name user:</label>
            <input type="text" class="form-control" name="nameusergroup" placeholder="Name user">
          </div>

          <div class="col">
            <label class="form-label">ID User:</label>
            <input type="number" class="form-control" name="idusergroup" placeholder="ID User">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Name group:</label>
          <input type="text" class="form-control" name="namegroup">
        </div>

        <div>
          <button type="submit" class="btn btn-primary" name="submit">Edit group</button>
        </div>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>