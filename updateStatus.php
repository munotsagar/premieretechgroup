<?php
	define('sugarEntry', TRUE);
	include_once('include/entryPoint.php');
    global $db;
    global $current_user;
    $id = $_POST['quoteid'];
    $employee_status_c = $_POST['employee_status_c'];
    $vendor_status_c = $_POST['vendor_status_c'];
    $manager_status_c = $_POST['manager_status_c'];

    if($employee_status_c) {
    	$db->query("update aos_quotes_cstm set employee_status_c = '".$employee_status_c."' where id_c = '".$id."'");
    }

    if($vendor_status_c) {
    	$db->query("update aos_quotes_cstm set vendor_status_c = '".$vendor_status_c."' where id_c = '".$id."'");
    }

    if($manager_status_c) {
    	$db->query("update aos_quotes_cstm set manager_status_c = '".$manager_status_c."' where id_c = '".$id."'");
    }

?>