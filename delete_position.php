<?php
include 'db.php';
if (isset($_POST["id"])) {
    $query = "DELETE FROM tb_position WHERE PositionID = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Deleted';
    }
    else
    {
        echo 'error';   
    }
}
?>