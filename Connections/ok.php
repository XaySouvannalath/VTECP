<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ok = "localhost";
$database_ok = "nbs";
$username_ok = "root";
$password_ok = "";
$ok = mysql_pconnect($hostname_ok, $username_ok, $password_ok) or trigger_error(mysql_error(),E_USER_ERROR); 
?>