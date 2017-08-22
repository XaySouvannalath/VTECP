<?php

$connect = mysqli_connect("localhost", "root", "", "nbs");
$sql = "DELETE FROM tb_training WHERE TrainingID = '" . $_POST["id"] . "'";
if (mysqli_query($connect, $sql)) {
    echo 'Data Deleted';
    
}
 $conn = mysqli_connect('localhost','root','','nbs');
  $request=$_POST['request'];
  $query="select * from view_training2 where PositionID='$request'";
  $output=mysqli_query($conn,$query);
echo '<table class="table table-stripe table-border success"';
    echo '<tr>
      <th class="text-center" id="whitefont">TrainingID</th>
      <th id="whitefont">Course</th>
     
    </tr>';
  while($fetch = mysqli_fetch_assoc($output))
  {
    
      echo '<tr>';
      echo '<td  id="whitefont" align="center">'.$fetch['TrainingID'].'</td>';
      echo '<td id="whitefont">'.$fetch['CourseName'].'</td>';
       echo '<td><input type="button" data-id3="'.$fetch["TrainingID"].'" value="Delete" class="btn btn-danger btn_delete   "></td>';
      echo '</tr>';
    
  };
echo '</table>';
?>