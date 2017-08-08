<!doctype html>
<?php 
include('')
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	if(!isset($_POST['btsave']))
	{
	?>
	<form action="insert_student.php" method="post">
	<input type="text" name="txtid"><br><br>
	<input type="text" name="txtid"><br><br>
	<input type="text" name="txtid"><br><br>
	<input type="submit" name="btsave"/>
	
	</form>
	<?php }
	else
	{
		
	}
	?>
</body>
</html>