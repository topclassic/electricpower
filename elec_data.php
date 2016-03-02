<?php

if(isset($_GET['format']) && $_GET['format'] == "json")
{
	$sql="";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql = "SELECT electricpower.outlet_id, outlet_name, elec_power, elec_limit, date_time FROM electricpower, electricpower.electricdata WHERE electricpower.outlet_id = $id AND electricpower.outlet_id";
	}
	else{
		$sql = "SELECT electricpower.outlet_id, outlet_name, elec_power, elec_limit, date_time FROM electricpower, electricpower.electricdata WHERE electricpower.outlet_id";
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
		$sql = "SELECT electricpower.outlet_id, outlet_name, elec_power, elec_limit, date_time FROM electricpower, electricpower.electricdata WHERE electricpower.outlet_id = $id AND electricpower.outlet_id";
	}
	else{
		$sql = "SELECT electricpower.outlet_id, outlet_name, elec_power, elec_limit, date_time FROM electricpower, electricpower.electricdata WHERE electricpower.outlet_id";
	}

	include_once("elec_connection.php");
	$result = mysql_query($sql);
}
?>
