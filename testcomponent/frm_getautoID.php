<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../../css/w3.css" rel="stylesheet" type="text/css">
<link href="../../js/bootstrap.js" rel="stylesheet" type="text/javascript">

<?php
//include("../classQuery.php");
//require("../classQuery.php");
//include("../DatabaseManagement/Department/function_show_department.php");
//require("../DatabaseManagement/Department/function_show_department.php");
		
//include('../classQuery.php');
require('../classQuery.php');
//include('../DatabaseManagement/Department/function_show_department.php');
require('../DatabaseManagement/Department/function_show_department.php');
		
		
		
		echo getAutoID('stdid','tb_student','STD',-3) . '<br>';
		echo getAutoID('DepartmentID','tb_department','DEP',-3) . '<br>';
		myDatabase();
	showDepartment();
?>
<input type="text" value=<?php echo getAutoID('stdid','tb_student','STD',-3);?> name="txtstdid" readonly>
