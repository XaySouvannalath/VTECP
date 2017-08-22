<?php

//insert.php
include 'db.php';
if (isset($_POST["framework"])) {
    $framework = '';
    $p = $_POST["PositionID"];
    foreach ($_POST["framework"] as $row) {
        $framework = $row;
        $sqlcheck = "select CourseID from tb_training where PositionID = '". $p ."' and CourseID = '". $framework ."'";
      //  echo $sqlcheck;
        $objCheck = mysqli_query($connect, $sqlcheck);
        $resultCheck = mysqli_fetch_array($objCheck);
        
        if ($resultCheck) {
            echo 'This course has been added';
        } 
        else {
            $query = "INSERT INTO tb_training(PositionID, CourseID) VALUES('" . $p . "', '" . $framework . "')";
            if (mysqli_query($connect, $query)) {
                echo 'Success!';
            }
        }
    }
}
?>