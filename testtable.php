<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="js/bootstrap.js" type="text/javascript" rel="stylesheet">
<link href="css/w3.css" type="text/css" rel="stylesheet">        
<link href="css/slideshow.css" type="text/css" rel="stylesheet">   
<link href="js/slideshow.js.js" type="text/javascript" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link src="/js/jquery.min.js" type="text/javascript" rel="stylesheet">
<?php
$objConnect = mysql_connect("localhost", "root", "") or die('Error Connect to Database');
$objDB = mysql_select_db("nbs");
$strSQL = "SELECT * FROM tb_department";
$objQuery = mysql_query($strSQL) or die("Error Query [" . $strSQL . "]");
?>
<div class="container">
    <div class="row">

        <p></p>


        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Department Infomation</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                            <tr>
                                <th><em class="fa fa-cog"></em></th>
                               
                                <th>DepartmentID</th>
                                <th>Department Name</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                  <?php
                while ($objResult = mysql_fetch_array($objQuery)) {
                    ?>
                                <td align="center">
                                    <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                               
                                <td><?php echo $objResult["DepartmentID"] ?></td>
                                <td><?php echo $objResult["DepartmentName"] ?></td>
                                
                            </tr>
                            <?php
                           }
                           //	<img OnMouseOver="bigImg(this)"  onMouseOut="normalImg(this)" src="data:image;base64,'.$dbarr[9].' " alt="" height=100px width=100px >
//		echo "<td>" . wordwrap("$dbarr[ImageName]" , 10, '<br>', true) . "</td>";
                           ?>
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Page 1 of 5
                        </div>
                        <div class="col col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            <ul class="pagination visible-xs pull-right">
                                <li><a href="#">«</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div></div>
</div>