<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../../css/w3.css" rel="stylesheet" type="text/css">
<link href="../../js/bootstrap.js" rel="stylesheet" type="text/javascript">

<?php 
include('../../classQuery.php');
function showDepartment()
{
	myDatabase();
	$sql = "select * from tb_student";
	$objQuery1 = mysql_query($sql);
	?>
    <table class="table">
    <tr>
    	<td>ID</td>
        <td>Name</td>
        <td>LastName</td>
    </tr>
    <?php 
	while($objResult = mysql_fetch_array($objQuery1))
	{
	?>
    <tr>
    	<td><?php echo $objResult["stdid"];?></td>
        <td><?php echo $objResult["stdname"];?></td>
        <td><?php echo $objResult["stdlastname"];?></td>
    </tr>
    <?PHP }?>
    </table>
    <?php
}
function showBanding()
{
}
function showPosition()
{}
function showCourseType()
{}
function showCourse()
{}
function showTraining()
{} 
showDepartment();
?>