<?php

$server_name = "localhost";
$user_name = "root";
$password = "devilsecret";

$con = mysql_connect($server_name, $user_name, $password)
or die ('Server Error: ' . mysql_error());

//select database for use
$database_name = 'electricpower';
mysql_select_db($database_name) or die ('DB Error: Unable to select db');

mysql_query("SET NAMES 'utf8'");

?>