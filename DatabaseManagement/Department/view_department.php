<?php require_once('../../Connections/dbcon.php'); 
require('../../classQuery.php');
?>

<?php
if(isset($_POST['btsavedepartment']))
{
	myDatabase();
	$sqlinsertdepartment = "insert into tb_department values('". $_POST['txtdepartmentid'] ."', '".$_POST['txtdepartmentname']."');";
//	mysql_query($sqlinsertdepartment);
	insertQuery($sqlinsertdepartment);
	echo $sqlinsertdepartment;

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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_showDepartment = 10;
$pageNum_showDepartment = 0;
if (isset($_GET['pageNum_showDepartment'])) {
  $pageNum_showDepartment = $_GET['pageNum_showDepartment'];
}
$startRow_showDepartment = $pageNum_showDepartment * $maxRows_showDepartment;

mysql_select_db($database_dbcon, $dbcon);
$query_showDepartment = "SELECT * FROM tb_department";
$query_limit_showDepartment = sprintf("%s LIMIT %d, %d", $query_showDepartment, $startRow_showDepartment, $maxRows_showDepartment);
$showDepartment = mysql_query($query_limit_showDepartment, $dbcon) or die(mysql_error());
$row_showDepartment = mysql_fetch_assoc($showDepartment);

if (isset($_GET['totalRows_showDepartment'])) {
  $totalRows_showDepartment = $_GET['totalRows_showDepartment'];
} else {
  $all_showDepartment = mysql_query($query_showDepartment);
  $totalRows_showDepartment = mysql_num_rows($all_showDepartment);
}
$totalPages_showDepartment = ceil($totalRows_showDepartment/$maxRows_showDepartment)-1;

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Department</title>
</head>

<body>
<p>&nbsp;</p>
<table width="508" border="1" align="center">
  <tr>
    <td>DepartmentID</td>
    <td>DepartmentName</td>
    <td>&nbsp;</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_showDepartment['DepartmentID']; ?></td>
      <td><?php echo $row_showDepartment['DepartmentName']; ?></td>
      <td><form id="form1" name="form1" method="post" action="">
        <input type="hidden" name="DepartmentID" id="DepartmentID" />
        <a href="edit_department.php?DepartmentID=<?php echo $row_showDepartment['DepartmentID']; ?>">Edit</a>
      </form></td>
    </tr>
    <?php } while ($row_showDepartment = mysql_fetch_assoc($showDepartment)); ?>
</table>
<p>&nbsp;
<table border="0" align="center">
  <tr>
    <td><?php if ($pageNum_showDepartment > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_showDepartment=%d%s", $currentPage, 0, $queryString_showDepartment); ?>">First</a>
      <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_showDepartment > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_showDepartment=%d%s", $currentPage, max(0, $pageNum_showDepartment - 1), $queryString_showDepartment); ?>">Previous</a>
      <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_showDepartment < $totalPages_showDepartment) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_showDepartment=%d%s", $currentPage, min($totalPages_showDepartment, $pageNum_showDepartment + 1), $queryString_showDepartment); ?>">Next</a>
      <?php } // Show if not last page ?></td>
    <td><?php if ($pageNum_showDepartment < $totalPages_showDepartment) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_showDepartment=%d%s", $currentPage, $totalPages_showDepartment, $queryString_showDepartment); ?>">Last</a>
      <?php } // Show if not last page ?></td>
  </tr>
</table>
</p>
</body>
</html>
<?php
mysql_free_result($showDepartment);
?>
