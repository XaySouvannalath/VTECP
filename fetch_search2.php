<?php
include 'db.php';
include './classQuery.php';
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "nbs");
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM tb_position 
  WHERE PositionID LIKE '%" . $search . "%'
  OR PositionName LIKE '" . $search . "%'
      OR PositionName LIKE '%". $search ."'
 
 ";
} else {
    $query = "
  SELECT * FROM tb_position ORDER BY PositionID
 ";
} 
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {
        $output .= '
          
           
           
                    <div class="card" id="panelbody">

                        <div class="container">
                         <br>
                             <center><h1 class="tablehead">' . $row["PositionName"] . '</h1></center> <hr>
                            <center> <label id="whitefont" class="text-center" >Position: ' . $row["PositionName"] . ' </label></center>  
                           <center>  <label id="whitefont" class="text-center">All Course To Train: ' . getPositionCourse($row["PositionID"]) . '</label></center> &nbsp; <hr>
                         <center>   <a id="btnhover1" href="search_postion_text_mode.php?PositionID=' . $row['PositionID'] . '" class="btn btn-success btn-inline">Show Course List</a>
                            <a id="btnhover2" href="search_result.php?PositionID=' . $row['PositionID'] . '" class="btn btn-info btn-inline ">Show Course List By Group Course</a> <br><br></center>
                        </div>
                       </div>
                    
    

  ';
    }
    echo $output;
} else {
    echo '<center>  <label id="whitefont" class="text-center">No Position Found</label></center> &nbsp; <hr>';
}
?>