<?php

	if($_POST['btnSubmit'] == "Update"){
        $outlet_id = $_GET['id'];
        $outlet_name = $_POST['txtOutlet_name'];
        $elec_limit = $_POST['txtElec_limit'];

        include_once("elec_connection.php");
        $sql = "UPDATE electricpower SET outlet_name = '$outlet_name', elec_limit = '$elec_limit' WHERE outlet_id = $outlet_id";
        mysql_query($sql);
        header("location: ./");
    }
    else if($_POST['btnSubmit'] == "Delete"){
        include_once("elec_connection.php");
        $outlet_id = $_GET['id'];
        mysql_query("DELETE FROM electricpower.electricdata WHERE outlet_id = $outlet_id");
        mysql_query("DELETE FROM electricpower WHERE outlet_id = $outlet_id");
        echo "Data Deleted.";
        header("location: ./");
    }
?>