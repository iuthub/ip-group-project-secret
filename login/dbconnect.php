<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","root",""))
{
	die('Connection Error! Error code: '.mysql_error());
}
if(!mysql_select_db("mygarage"))
{
	die('Databse Selection Error! Error code: '.mysql_error());
}
?>
