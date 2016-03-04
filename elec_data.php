<?php

if(isset($_GET['format']) && $_GET['format'] == "json")
{
	$sql="";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql = "SELECT electricdata.outlet_id, date_time, watt, unit FROM electricpower, electricpower.electricdata WHERE electricdata.outlet_id = $id";
	}
	else{
		$sql = "SELECT electricdata.outlet_id, date_time, watt, unit FROM electricpower, electricpower.electricdata";
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
		$sql = "SELECT electricdata.outlet_id, date_time, watt, unit FROM electricpower, electricpower.electricdata WHERE electricdata.outlet_id = $id";
	}
	else{
		$sql = "SELECT electricdata.outlet_id, date_time, watt, unit FROM electricpower, electricpower.electricdata";
	}

	include_once("elec_connection.php");
	$result = mysql_query($sql);
}
?>
