<?php
require_once "dbconnect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `user_group` WHERE idgroupassignment = $id";
$result = mysqli_query($connection, $sql);
if($result) {
    header("Location: index.php?msg=Group deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($connection);
}

?>