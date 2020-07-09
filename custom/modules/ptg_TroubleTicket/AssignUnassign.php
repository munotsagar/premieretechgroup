<?php
if(!defined('sugarEntry') || !sugarEntry)
	die('not a valid entry point');


	$bean_id = $bean->id;
	// print_r($bean);
	$ticket_number = $bean->ticket_number_c;
	$customer_name = $bean->customer_name_c;
	$company_name = $bean->company_name_c;
	$date_modified = $bean->date_modified;
	$redirect_url = 'index.php?module=ptg_TroubleTicket&action=DetailView&record='.$bean_id;
	$query= "SELECT created_by FROM ptg_troubleticket WHERE id= '$bean_id'";
	$created_user_id= $GLOBALS['db']->getOne($query);

	$alert = BeanFactory::newBean('Alerts');
	$alert->name = "Assigned to".$ticket_number."\n".$customer_name;
	$alert->description = $company_name."\n".$date_modified;
	$alert->url_redirect = $redirect_url;
	$alert->target_module = 'Trouble Ticket';
	$alert->assigned_user_id = $created_user_id;
	$alert->type = 'info';
	$alert->is_read = 0;
	$alert->save();

?>