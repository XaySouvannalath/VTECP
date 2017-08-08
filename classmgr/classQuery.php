<?php
//function connect to the database name nbs
function connectDatabase()
{
	mysql_connect("localhost", "root","");
	mysql_select_db("nbs");
}
//function insert, delete, and update
function runQuery($sql)
{
	connectDatabase();
	return mysql_query($sql);
}
?>