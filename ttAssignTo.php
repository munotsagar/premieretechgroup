<?php
	define('sugarEntry', TRUE);
	include_once('include/entryPoint.php');
	
    global $db;
    global $current_user;
    $ticketid = $_POST['ticketid'];
    $userid = $_POST['userid'];
    $flag = $_POST['flag'];

   

    if($flag == "assign") {
    	$query = "update ptg_troubleticket set assigned_user_id = '".$userid."', date_modified = '".date('Y-m-d H:i:s')."' where id='".$ticketid."'";
    	echo $query;
    	$db->query($query);


    	
    	$beanTT = BeanFactory::getBean('ptg_TroubleTicket', $ticketid);

    	$id = $beanTT->id;
    	$ticket_number = $beanTT->ticket_number_c;
    	$customer_name = $beanTT->customer_name_c;
    	$company_name = $beanTT->company_name_c;
    	$date_modified = $beanTT->date_modified;
    	$created_by = $beanTT->created_by;

    	$redirect_url = 'index.php?module=ptg_TroubleTicket&action=DetailView&record='.$id;		
    	$query2= "SELECT * FROM users WHERE id= '".$userid."'";
    	$users_result = $db->query($query2, true,"Error reading number of  fields: ");
    	$users_row = $db->fetchByAssoc($users_result);
    	$first_name = $users_row['first_name'];
    	$last_name = $users_row['last_name'];


    	$alert = BeanFactory::newBean('Alerts');
    	$alert->name = $ticket_number. "\nAssigned to ".$first_name." ".$last_name;
    	$alert->description = $customer_name."\n".$company_name."\n".$date_modified;
    	$alert->url_redirect = $redirect_url;
    	$alert->target_module = 'Trouble Ticket';
    	$alert->assigned_user_id = $created_by;
    	$alert->type = 'info';
    	$alert->is_read = 0;
    	$alert->save();

    } else {
    	$query = "update ptg_troubleticket set assigned_user_id = '' where id='".$ticketid."'";
    	$db->query($query);

    	
    }

    
?> 