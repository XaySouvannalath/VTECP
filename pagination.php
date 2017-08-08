 <?php  
 //pagination.php  
 $connect = mysqli_connect("localhost", "root", "", "");  
 $record_per_page = 5;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM tb_department ORDER BY DepartmentID DESC LIMIT $start_from, $record_per_page";  
 $result = mysql_query($query);  
 $output .= "  
      <table class='table table-bordered'>  
           <tr>  
                <th width='50%'>DepartmentID</th>  
                <th width='50%'>DepartmentName</th>  
           </tr>  
 ";  
 while($row = mysql_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["DepartmentID"].'</td>  
                <td>'.$row["DepartmentName"].'</td>  
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM tb_Department ORDER BY DepartmentID DESC";  
 $page_result = mysql_query($page_query);  
 $total_records = mysql_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  