<?php

//insert.php
include 'db.php';
if (isset($_POST["framework"])) {
    $framework = '';
    $p = $_POST["CourseID"];
    foreach ($_POST["framework"] as $row) {
        $framework = $row;
        $sqlcheck = "select PositionID from tb_training where CourseID = '". $p ."' and PositionID = '". $framework ."'";
      //  echo $sqlcheck;
        $objCheck = mysqli_query($connect, $sqlcheck);
        $resultCheck = mysqli_fetch_array($objCheck);
        
        if ($resultCheck) {
            echo 'This course has been added';
        } 
        else {
            $query = "INSERT INTO tb_training(CourseID, PositionID) VALUES('" . $p . "', '" . $framework . "')";
            if (mysqli_query($connect, $query)) {
                echo 'Success!';
            }
        }
    }
}
?>