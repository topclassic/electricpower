<?php

if(isset($_GET['format']) && $_GET['format'] == "json")
{
	$sql="";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql = "SELECT * FROM electricpower WHERE outlet_id = $id AND outlet_id != 0";
	}
	else{
		$sql = "SELECT * FROM electricpower WHERE outlet_id != 0";
	}

	include_once("elec_connection.php");
	$result = mysql_query($sql) or die('Error in query: $query' . mysql_error());

	while($row = mysql_fetch_assoc($result)){
		$output[] = $row;
	}

	print (json_encode($output));
}
else
{
	$sql="";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql = "SELECT * FROM electricpower WHERE outlet_id = $id AND outlet_id != 0";
	}
	else{
		$sql = "SELECT * FROM electricpower WHERE outlet_id != 0";
	}

	include_once("elec_connection.php");
	$result = mysql_query($sql);
}
?>
