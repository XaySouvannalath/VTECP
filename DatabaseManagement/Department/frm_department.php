<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../../js/bootstrap.js" rel="stylesheet" type="text/javascript">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
include '../../classQuery.php';



$did = "";
$dname = "";

function getPosts() {
    $posts = array();
    $posts[0] = $_POST['txtdepartmentid'];
    $posts[1] = $_POST['txtdepartmentname'];
    return $posts;
}

if (isset($_POST['btsubmitdepartment'])) {
    $data = getPosts();
    $sqlinsert = "INSERT INTO tb_department values('$data[0]', '$data[1]')";
    try {
        myDatabase();
        $objQuery = mysql_query($sqlinsert);
        if ($objQuery) {
            ?>
            <div class="container">
                <br>
                <div class="alert alert-success alert-dismissable" id="success-alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>
                </div>
            </div>
            <?php
        } else {
            ?>
<div class="container">
                <br>
                <div class="alert alert-danger alert-dismissable" id="success-alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong>
                </div>
            </div>


            <?php
        }
    } catch (Exception $ex) {
        echo 'error insert' . $ex->getMessage();
    }
}
?>
<html>
    <head>
        <title>
            Department
        </title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="frm_department.php" method="post">
                        <input class="form-control text-success" readonly="true" type="text" name="txtdepartmentid" value="<?php echo getAutoID("DepartmentID", "tb_department", "DEP", -3); ?>" placeholder="Enter DepartmentID"><br><br>
                        <input class="form-control" type="text" required="require" name="txtdepartmentname" placeholder="Enter Department Name"><br><br>
                        <input type="submit" class="btn btn-success btn-block" name="btsubmitdepartment" value="Save">
                    </form>
                    <div class="col-lg-12">

                    </div>
                </div>
                </body>
                <script>

                    $("#success-alert").fadeTo(1000, 200).slideUp(1000, function () {
                        $("#success-alert").slideUp(1000);
                    });
                </script>
                </html>