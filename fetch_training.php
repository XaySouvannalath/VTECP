<?php

include 'db.php';

$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
        Select * from view_training2 
        where PositionID = '".$search."'
            
            ";
}
else{
    $query = "
        Select * from view_training2       
            
            ";
}
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
$output .= ' 
 <table  class="table  table-responsive striped">
                            <thead>
                                <tr>
                                     
                                    <th class="tablehead" align="center">Course Name</th>
                                    <th id="whitefont">Option</th>
                                </tr>
                            </thead>
                      


    ';
    while ($row = mysqli_fetch_array($result)) {
        $output .='
          
 <tr>
        
     <td id="whitefont">' . $row['CourseName'] . '</td>
       <td><input type="button" data-id3="' . $row["TrainingID"] . '" value="Delete" class="btn btn-danger btn_delete   "></td> 
     
 <tr>

            
';
       
    }
    $output .= '  </table>     ';
     echo $output;
} else {
     echo '<h1 class="getwhitefont">No Data For Now</h1>';
}



  