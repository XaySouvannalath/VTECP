<?php require_once('../../Connections/dbcon.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE tb_department SET DepartmentName=%s WHERE DepartmentID=%s",
                       GetSQLValueString($_POST['DepartmentName'], "text"),
                       GetSQLValueString($_POST['DepartmentID'], "text"));

  mysql_select_db($database_dbcon, $dbcon);
  $Result1 = mysql_query($updateSQL, $dbcon) or die(mysql_error());

  $updateGoTo = "view_department.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_updateDepartment = "-1";
if (isset($_GET['DepartmentID'])) {
  $colname_updateDepartment = $_GET['DepartmentID'];
}
mysql_select_db($database_dbcon, $dbcon);
$query_updateDepartment = sprintf("SELECT * FROM tb_department WHERE DepartmentID = %s", GetSQLValueString($colname_updateDepartment, "text"));
$updateDepartment = mysql_query($query_updateDepartment, $dbcon) or die(mysql_error());
$row_updateDepartment = mysql_fetch_assoc($updateDepartment);
$totalRows_updateDepartment = mysql_num_rows($updateDepartment);

$colname_updateDepartment = "-1";
if (isset($_POST['DepartmentID'])) {
  $colname_updateDepartment = $_POST['DepartmentID'];
}
mysql_select_db($database_dbcon, $dbcon);
$query_updateDepartment = sprintf("SELECT * FROM tb_department WHERE DepartmentID = %s", GetSQLValueString($colname_updateDepartment, "text"));
$updateDepartment = mysql_query($query_updateDepartment, $dbcon) or die(mysql_error());
$row_updateDepartment = mysql_fetch_assoc($updateDepartment);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Department</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">DepartmentID:</td>
      <td><?php echo $row_updateDepartment['DepartmentID']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">DepartmentName:</td>
      <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="DepartmentID" value="<?php echo $row_updateDepartment['DepartmentID']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($updateDepartment);
?>
