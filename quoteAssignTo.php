<?php
	define('sugarEntry', TRUE);
	include_once('include/entryPoint.php');
    global $db;
    global $current_user;
    $quoteid = $_POST['quoteid'];
    $userid = $_POST['userid'];
    $flag = $_POST['flag'];

    if($flag == "assign") {
    	$query = "update aos_quotes set assigned_user_id = '".$userid."' where id='".$quoteid."'";
    	echo $query;
    	$db->query($query);
    } else {
    	$query = "update aos_quotes set assigned_user_id = '' where id='".$quoteid."'";
    	$db->query($query);
    }
    
?> 