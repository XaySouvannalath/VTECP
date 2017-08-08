<?php require_once('Connections/dbcon.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if ((isset($_POST['DepartmentID'])) && ($_POST['DepartmentID'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_department WHERE DepartmentID=%s",
                       GetSQLValueString($_POST['DepartmentID'], "text"));

  mysql_select_db($database_dbcon, $dbcon);
  $Result1 = mysql_query($deleteSQL, $dbcon) or die(mysql_error());

  $deleteGoTo = "frm_department_1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {

    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
        if (PHP_VERSION < 6) {
            $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        }

        $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

        switch ($theType) {
            case "text":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "long":
            case "int":
                $theValue = ($theValue != "") ? intval($theValue) : "NULL";
                break;
            case "double":
                $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
                break;
            case "date":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "defined":
                $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }

}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_showdept = 10;
$pageNum_showdept = 0;
if (isset($_GET['pageNum_showdept'])) {
  $pageNum_showdept = $_GET['pageNum_showdept'];
}
$startRow_showdept = $pageNum_showdept * $maxRows_showdept;

mysql_select_db($database_dbcon, $dbcon);
$query_showdept = "SELECT * FROM tb_department ORDER BY DepartmentID DESC";
$query_limit_showdept = sprintf("%s LIMIT %d, %d", $query_showdept, $startRow_showdept, $maxRows_showdept);
$showdept = mysql_query($query_limit_showdept, $dbcon) or die(mysql_error());
$row_showdept = mysql_fetch_assoc($showdept);

if (isset($_GET['totalRows_showdept'])) {
  $totalRows_showdept = $_GET['totalRows_showdept'];
} else {
  $all_showdept = mysql_query($query_showdept);
  $totalRows_showdept = mysql_num_rows($all_showdept);
}
$totalPages_showdept = ceil($totalRows_showdept/$maxRows_showdept)-1;

mysql_select_db($database_dbcon, $dbcon);
$query_ShowDataForDelete = "SELECT * FROM tb_department ORDER BY DepartmentID DESC";
$ShowDataForDelete = mysql_query($query_ShowDataForDelete, $dbcon) or die(mysql_error());
$row_ShowDataForDelete = mysql_fetch_assoc($ShowDataForDelete);
$totalRows_ShowDataForDelete = mysql_num_rows($ShowDataForDelete);

$maxRows_showDepartment = 10;
$pageNum_showDepartment = 0;
if (isset($_GET['pageNum_showDepartment'])) {
    $pageNum_showDepartment = $_GET['pageNum_showDepartment'];
}
$startRow_showDepartment = $pageNum_showDepartment * $maxRows_showDepartment;

mysql_select_db($database_dbcon, $dbcon);
$query_showDepartment = "SELECT * FROM tb_department order by DepartmentID desc";
$query_limit_showDepartment = sprintf("%s LIMIT %d, %d", $query_showDepartment, $startRow_showDepartment, $maxRows_showDepartment);
$showDepartment = mysql_query($query_limit_showDepartment, $dbcon) or die(mysql_error());
$row_showDepartment = mysql_fetch_assoc($showDepartment);

if (isset($_GET['totalRows_showDepartment'])) {
    $totalRows_showDepartment = $_GET['totalRows_showDepartment'];
} else {
    $all_showDepartment = mysql_query($query_showDepartment);
    $totalRows_showDepartment = mysql_num_rows($all_showDepartment);
}
$totalPages_showDepartment = ceil($totalRows_showDepartment / $maxRows_showDepartment) - 1;

$queryString_showDepartment = "";
if (!empty($_SERVER['QUERY_STRING'])) {
    $params = explode("&", $_SERVER['QUERY_STRING']);
    $newParams = array();
    foreach ($params as $param) {
        if (stristr($param, "pageNum_showDepartment") == false &&
                stristr($param, "totalRows_showDepartment") == false) {
            array_push($newParams, $param);
        }
    }
    if (count($newParams) != 0) {
        $queryString_showDepartment = "&" . htmlentities(implode("&", $newParams));
    }
}
$queryString_showDepartment = sprintf("&totalRows_showDepartment=%d%s", $totalRows_showDepartment, $queryString_showDepartment);
?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/w3.css" rel="stylesheet" type="text/css">
<link href="js/bootstrap.js" rel="stylesheet" type="text/javascript">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
include 'classQuery.php';



$did = "";
$dname = "";

function getPosts() {
    $posts = array();
    $posts[0] = $_POST['txtdepartmentid'];
    $posts[1] = $_POST['txtdepartmentname'];
    return $posts;
}

if (isset($_POST['btsubmitdepartment'])) {

    myDatabase();
    $data = getPosts();
    $sqlcheckexist = "SELECT DepartmentID from tb_department where DepartmentID='" . $_POST['txtdepartmentid'] . "'";
    $objCheck = mysql_query($sqlcheckexist);

    $objCheckResult = mysql_fetch_array($objCheck);
    if ($objCheckResult) {
        ?>
        <div class="container">
            <br>
            <div class="alert alert-danger alert-dismissable" id="success-alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>This Data Has Existed!</strong>
            </div>
        </div>


        <?php
    } else {
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
}
?>
<html>
    <head>
        <title>Management</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="js/bootstrap.js" type="text/javascript" rel="stylesheet">
        <link href="css/w3.css" type="text/css" rel="stylesheet">        
        <link href="css/slideshow.css" type="text/css" rel="stylesheet">   
        <link href="js/slideshow.js.js" type="text/javascript" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link src="/js/jquery.min.js" type="text/javascript" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        <style>
            #navcolor{
                background-color: #C71585;   
            }
            #whitefont
            {
                color: white;
                font-size: 120%;
            }
            #btnwidth
            {
                width: 100px;
            }
        </style>
    </head>
    <body>
        <script type="text/javascript">
            window.onload = function () {
                loadpage('behome.php');
            }
            function loadpage(pagename) {
                var x = new XMLHttpRequest();
                x.open("get", pagename)
                x.onreadystatechange = function () {
                    var content = document.getElementById("kk");
                    content.innerHTML = x.responseText;
                }
                x.send(null);
            }
            $('#form').submit(function () {
                $('#notice').show();
                setTimeout(function () {
                    $('#notice').fadeOut();
                }, 5000);
            });
        </script>
        <nav class="navbar navbar-default navbar-static-top top-bar fixed w3-card-4" id="navcolor">
            <h1 id="whitefont" align="center">Database Management</h1>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="beindex.php" onClick="loadpage('behome.php')" class="navbar-brand"><img class="modal-content" src="pic/crowneplazaicon.jpg" width="100"/></a>
                </div>
                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="frm_department.php" id="whitefont" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="modal-content" src="pic/department.png" width="40"/><br><br>Department</a></li>

                        <li><a href="#" id="whitefont" onClick="loadpage('frm_banding.php')">&nbsp;&nbsp;&nbsp;<img class="modal-content" src="pic/banding.png" width="40"/><br><br>Banding</a></li>

                        <li><a href="#" id="whitefont" onClick="loadpage('frm_position.php')">&nbsp;&nbsp;<img class="modal-content" src="pic/position.png" width="40"/><br><br>Position</a></li>
                        <li><a href="#" id="whitefont" onClick="loadpage('frm_coursetype.php')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="modal-content" src="pic/coursetype.png" width="40"/><br><br>Course Type</a></li>
                        <li><a href="#" id="whitefont" onClick="loadpage('frm_course.php')">&nbsp;&nbsp;<img class="modal-content" src="pic/course.png" width="40"/><br><br>Course</a></li>
                        <li><a href="#" id="whitefont" onClick="loadpage('frm_training.php')">&nbsp;&nbsp;<img class="modal-content" src="pic/training.png" width="40"/><br><br>Training</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="user/frm_login.php"  id="whitefont"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>

                    </ul>

                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel" >
                        <div class="panel-heading w3-card-4" ><h4  align="center" class="">
                                <div class="panel-title "  >  <label >Database Management</label></div>
                            </h4></div>
                        <div class="nav nav-pills nav-stacked w3-card-4">
                            <li> <a  href="#" >&nbsp;Department</a> </li>
                            <li><a  href="#" >&nbsp;Banding</a></li> 
                            <li><a href="#" >&nbsp;Position</a></li>
                            <li><a href="#" >&nbsp;Course Type</a></li>
                            <li><a  href="#" >&nbsp;Course</a></li>
                            <li> <a  href="#" >&nbsp;Training</a></li>


                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <br>
                    <div class=" w3-card-4">
                    <div class="panel panel-heading">
                        Department
                    </div>
                        <div class="panel-body">
                    <form action="frm_department.php" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control text-success" readonly type="text" name="txtdepartmentid" value="<?php echo getAutoID("DepartmentID", "tb_department", "DEP", -3); ?>" placeholder="Enter DepartmentID">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-text-background"></i></span>
                        <input class="form-control" type="text" required name="txtdepartmentname" placeholder="Enter Department Name">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success btn-block" name="btsubmitdepartment" value="Save">
                    </form>
                            </div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
           
        </p>
    <table border="1">
          <tr>
            <td>DepartmentID</td>
            <td>DepartmentName</td>
            <td colspan="2">Option</td>
          </tr>
          <?php do { ?>
            <tr>
              <td><?php echo $row_showdept['DepartmentID']; ?></td>
              <td><?php echo $row_showdept['DepartmentName']; ?></td>
              <td><form name="form1" method="post" action="">
                <input name="DepartmentID" type="hidden" id="DepartmentID" value="<?php echo $row_showdept['DepartmentID']; ?>">
                <input name="button" type="submit" class="btn btn-danger" id="button" value="Delete" onClick="return confirm('Are you Sure?');">
              </form></td>
              <td>Edit</td>
            </tr>
            <?php } while ($row_showdept = mysql_fetch_assoc($showdept)); ?>
    </table>
</body>
</html><?php
mysql_free_result($showdept);

mysql_free_result($ShowDataForDelete);

mysql_free_result($showDepartment);
?>
<script>

    $("#success-alert").fadeTo(1000, 200).slideUp(1000, function () {
        $("#success-alert").slideUp(1000);
    });
</script>
