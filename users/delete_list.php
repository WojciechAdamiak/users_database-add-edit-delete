<?php
require_once "dbconnect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `list_of_user_groups` WHERE idlist = $id";
$result = mysqli_query($connection, $sql);
if($result) {
    header("Location: index.php?msg=List item removed successfully");
}
else {
    echo "Failed: " . mysqli_error($connection);
}

?>