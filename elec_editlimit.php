<?php

	if($_POST['btnSubmit'] == "Update"){
        $outlet_id = $_GET['id'];
        $elec_limit = $_POST['txtElec_limit'];

        include_once("elec_connection.php");
        $sql = "UPDATE electricpower SET elec_limit = '$elec_limit' WHERE outlet_id = $outlet_id";
        mysql_query($sql);
        header("location: ./");
    }

?>