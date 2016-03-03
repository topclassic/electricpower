<?php
	if($_POST['btnSubmit'] == "Delete"){
        include_once("elec_connection.php");
        $outlet_id = $_GET['id'];
        mysql_query("DELETE FROM electricpower.electricdata WHERE outlet_id = $outlet_id");
        mysql_query("DELETE FROM electricpower WHERE outlet_id = $outlet_id");
        echo "Data Deleted.";
        header("location: ./");
    }
?>