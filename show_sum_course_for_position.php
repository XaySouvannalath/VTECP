<?php
include 'db.php';
$query_selet_positionName = "select PositionID,PositionName, COUNT(PositionID) as Total_Course FROM view_training2 
group by PositionID";
$objResultPositionName = mysqli_query($connect, $query_selet_positionName);
$i = 1;
?>
<?php while ($row2 = mysqli_fetch_array($objResultPositionName)) { ?>
    <a id="whitefont" class="hovershadow  " href="search_postion_text_mode.php?PositionID=<?php echo $row2['PositionID']; ?>"><?php echo $i .'. ' . $row2['PositionName']; ?>&nbsp;<span class="badge label label-danger badgecolor"><?php echo $row2['Total_Course'] ?></span></a><br>
<?php
$i = $i + 1;

} ?>