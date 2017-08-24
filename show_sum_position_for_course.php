<?php
include 'db.php';
$query_selet_positionName = "select count(T.CourseID) as Course_ID, C.CourseName from tb_training T, tb_course C
where T.CourseID = c.CourseID GROUP by t.CourseID";
$objResultPositionName = mysqli_query($connect, $query_selet_positionName);
$i = 1;
?>
 
<?php while ($row2 = mysqli_fetch_array($objResultPositionName)) { ?>
<a id="whitefont"   class="hovershadow " href=""> <?php echo $i .'. ' . $row2['CourseName']; ?>&nbsp;<span class="badge label label-danger badgecolor"><?php echo $row2['Course_ID'] ?></span> </a><br>
<?php 
$i = $i + 1;
} ?>
 