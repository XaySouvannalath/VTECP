<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View Project</title>
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <?php
        $objConnect = mysql_connect("localhost", "root", "") or die('Error Connect to Database');
        $objDB = mysql_select_db("KFT");
        $strSQL = "SELECT * FROM tb_project";
        $objQuery = mysql_query($strSQL) or die("Error Query [" . $strSQL . "]");
        ?>
        <div class="container">
            <div class="form-group input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search">&nbsp;Search</i>

                    </button>
                </span>
            </div>
            <table style="text-align:center" class="table table-bordered table-responsive table-condensed table-striped modal-content ">
                <tr>
                <thead>
                <th class="info" height="50" >ProjectID</th>
                <th class="info">ProjectName</th>
                <th class="info">Village</th>
                <th class="info">District</th>
                <th class="info">Province</th>
                <th class="info">Date Start</th>
                <th class="info">Date Finish</th>
                <th class="info">Detail</th>
                <th class="info">Image Name</th>
                <th class="info">Image</th>
                <th class="info">Option</th>
                </thead>
                </tr>
                <?php
                while ($objResult = mysql_fetch_array($objQuery)) {
                    ?>
                    <tr>
                        <td><?php echo $objResult["project_id"] ?></td>
                        <td><?php echo $objResult["project_name"] ?></td>
                        <td><?php echo $objResult["pvillage"] ?></td>
                        <td><?php echo $objResult["pdistrict"] ?></td>
                        <td><?php echo $objResult["pprovince"] ?></td>
                        <td><?php echo $objResult["date_start"] ?></td>
                        <td><?php echo $objResult["date_finish"] ?></td>
                        <td><?php echo wordwrap($objResult["detail"], 20, '<br>', true) ?></td>
                        <td><?php echo wordwrap($objResult["ImageName"], 10, '<br>', true) ?></td>
                        <?php echo '<td><img   src="data:image;base64,' . $objResult["picture"] . ' " alt="" height=100px width=100px ></td>'; ?>
                        <td valign="bottom"><a class="btn btn-danger" href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Delete_Project.php?PrID=<?php echo $objResult["project_id"]; ?>';}">Delete</a>


                            <a class="btn btn-primary" href="Update_Project.php?PrID=<?php echo $objResult["project_id"]; ?>">Update</a>
                            <a class="btn btn-primary" href="../FontEnd/View_Portfolio.php?PrID=<?php echo $objResult["project_id"]; ?>">Preview</i></a>
                        </td>

                    </tr><?php
                           }
                           //	<img OnMouseOver="bigImg(this)"  onMouseOut="normalImg(this)" src="data:image;base64,'.$dbarr[9].' " alt="" height=100px width=100px >
//		echo "<td>" . wordwrap("$dbarr[ImageName]" , 10, '<br>', true) . "</td>";
                           ?>
            </table>
        </div>

    </body>
</html>