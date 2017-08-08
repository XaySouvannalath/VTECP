<?php
//require './classQuery.php';
include("./classQuery.php");


if(!isset($_POST['btsummit']))
{
?>
<form action="frm_useClass.php" method="post">
    <input type="text" placeholder="Enter Department ID" id="txtid" name="txtid"><br><br>
    <input type="text" placeholder="Enter Department Name" id="txtname" name="txtname"><br><br>
        <input type="text" placeholder="Enter Department Last Name" id="txtlastname" name="txtlastname"><br><br>
    <input type="submit" name="btsummit" value="Save"/>
</form>
<?php

?>
<table>
    <tr>
         <th>ID</th>
          <th>Name</th>
           <th>Lastname</th>
    </tr>
    <tr>
        <td><?php ?></td>
        <td><?php ?></td>
        <td><?php ?></td>
    </tr>
    
</table>
<?php
}
else
{
    //dbcon();
$id = $_POST['txtid'];
$name = $_POST['txtname'];
$lastname = $_POST['txtlastname'];
$sql = "INSERT INTO tb_student VALUES($id,$name,$lastname)";

$objInsert = insertQuery($sql);

if(!$objInsert)
{
    echo "Record already exist.<br>";
    echo $sql;
}
else
{
    echo "Record inserted.<br>";
}
?>

<a href="frm_useClass.php">Back</a>
<?PHP
}
?>