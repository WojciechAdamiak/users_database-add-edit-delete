<?php
require_once "dbconnect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE iduser = $id";
$result = mysqli_query($connection, $sql);
if($result) {
    header("Location: index.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($connection);
}

?>