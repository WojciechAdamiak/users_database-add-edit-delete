<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Users</title>
  </head>
  <body>
    <?php

      require_once("nav.php");

    ?> 
    <div class="container">
        <?php 
        if(isset ($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <p class="h2">Users</p>
        <table class="table table-hover text-center mb-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name user</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "dbconnect.php";
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['iduser'] ?></td>
                            <td><?php echo $row['nameuser'] ?></td>
                            <td><?php echo $row['firstname'] ?></td>
                            <td><?php echo $row['surname'] ?></td>
                            <td><?php echo $row['birthdate'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['iduser'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id=<?php echo $row['iduser'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
            </tbody>
        </table>
        <a href="add_new.php" class="btn btn-dark mb-3">Add New User</a>
    </div>

    <div class="container">

        <p class="h2">User groups</p>
        <table class="table table-hover text-center mb-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ID user</th>
                    <th scope="col">Name user</th>
                    <th scope="col">Name group</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "dbconnect.php";
                    $sql = "SELECT * FROM `user_group`";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['idgroupassignment'] ?></td>
                            <td><?php echo $row['iduser'] ?></td>
                            <td><?php echo $row['nameuser'] ?></td>
                            <td><?php echo $row['namegroup'] ?></td>
                            <td>
                                <a href="edit_group.php?id=<?php echo $row['idgroupassignment'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete_group.php?id=<?php echo $row['idgroupassignment'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
            </tbody>
        </table>
        <a href="add_new_group.php" class="btn btn-dark mb-3">Add New Group</a>
    </div>

    <div class="container">
        
        <p class="h2">List of user groups</p>
        <table class="table table-hover text-center mb-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name group</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "dbconnect.php";
                    $sql = "SELECT * FROM `list_of_user_groups`";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['idlist'] ?></td>
                            <td><?php echo $row['namegroup'] ?></td>
                            <td>
                                <a href="edit_list.php?id=<?php echo $row['idlist'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete_list.php?id=<?php echo $row['idlist'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
            </tbody>
        </table>
        <a href="add_new_list.php" class="btn btn-dark mb-3">Add New List Item</a>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>