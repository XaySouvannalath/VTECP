<?php

include 'db.php';

$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
       select T.TrainingID, P.PositionName 
from tb_training T, tb_position P
where T.PositionID = P.PositionID and T.CourseID = '".$search."'
            
            ";
}
else{
    $query = "
       select T.TrainingID, P.PositionName 
from tb_training T, tb_position P
where T.PositionID = P.PositionID      
            
            ";
}
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
$output .= ' 
 <table  class="table  table-responsive striped">
                            <thead>
                                <tr>
                                     
                                    <th class="tablehead" align="center">Position Name</th>
                                    <th id="whitefont">Option</th>
                                </tr>
                            </thead>
                      


    ';
    while ($row = mysqli_fetch_array($result)) {
        $output .='
          
 <tr>
       
     <td id="whitefont">' . $row['PositionName'] . '</td>
       <td><input type="button" data-id3="' . $row["TrainingID"] . '" value="Delete" class="btn btn-danger btn_delete   "></td> 
     
 <tr>

            
';
       
    }
    $output .= '  </table>     ';
     echo $output;
} else {
    echo '<h1 class="getwhitefont">No Data For Now</h1>';
}



  