<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Department</title>

</style>

</head>
<?php 
include('../../classQuery.php');
?>
<body>
<form id="form1" name="form1" method="post" action="view_department.php">
  <p>&nbsp;</p>
  <table width="340" border="0" align="center">
    <tr>
      <th colspan="2" align="center">Insert Department</th>
    </tr>
    <tr>
      <td width="134">&nbsp;</td>
      <td width="190">&nbsp;</td>
    </tr>
    <tr>
      <td>DepartmentID:</td>
      <td><label for="txtdepartmentid"></label>
      <input name="txtdepartmentid" type="text" id="txtdepartmentid"  value="<?php echo getAutoID("DepartmentID", "tb_department", "DEP", -3);  ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Department Name:</td>
      <td><label for="txtdepartmentname"></label>
      <input type="text" name="txtdepartmentname" id="txtdepartmentname" required="required"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btsavedepartment" id="btsavedepartment" value="Submit" />
            <input type="reset" name="btresetdepartment" id="btresetdepartment" value="Reset" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<?php



?>
</body>
</html>