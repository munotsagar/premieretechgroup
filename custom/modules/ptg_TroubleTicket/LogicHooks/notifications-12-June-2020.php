<?php

if(!defined('sugarEntry') || !sugarEntry)
	die('not a valid entry point');

/**
 * 
 */
class Getnotifications
{
	
	public function troubleTicket(&$bean,$event,$arguments)
	{
		// global $bean, $GLOBALS;
		// echo "Hello from VoiceServiceRequest localhost";

		$bean_id = $bean->id;
		// print_r($bean);
		$ticket_number = $bean->ticket_number_c;
		$customer_name = $bean->customer_name_c;
		$company_name = $bean->company_name_c;
		$date_modified = $bean->date_modified;

		// print_r($ticket_number);
		// print_r($customer_name);
		// print_r($company_name);
		// print_r($date_modified);
		

		$redirect_url = 'index.php?module=ptg_TroubleTicket&action=DetailView&record='.$bean_id;
		$query= "SELECT assigned_user_id FROM ptg_troubleticket WHERE id= '$bean_id'";
		$assigned_user_id= $GLOBALS['db']->getOne($query);

		// print_r($assigned_user_id);
		// print_r($redirect_url);


		$alert = BeanFactory::newBean('Alerts');
		$alert->name = $ticket_number."\n".$customer_name;
		$alert->description = $company_name."\n".$date_modified;
		$alert->url_redirect = $redirect_url;
		$alert->target_module = 'Trouble Ticket';
		$alert->assigned_user_id = $assigned_user_id;
		$alert->type = 'info';
		$alert->is_read = 0;
		$alert->save();
		// exit();
	}

	public function generateTicketNumber(&$bean, $event, $arguments)
	{
		global $db;
		
		// $result = mysqli_query("SELECT COUNT(*) FROM ptg_troubleticket");
		// $row = mysqli_fetch_array($result);

		// $total = $row[0];
		// echo "Total rows: " . $total;

		// $result = mysqli_query("SELECT * FROM ptg_troubleticket");
		// $rows = mysqli_num_rows($result);
		// echo "Rows:" .$rows;

		// $cnt = mysqli_num_rows(mysqli_query("SELECT COUNT(*) FROM ptg_troubleticket"));
		// echo $cnt;

		// $qry = mysqli_query("select * from ptg_troubleticket");
		// echo mysqli_num_rows($qry);
		if(is_null($bean->ticket_number_c)){ //Condition to avoid changing Ticket no. when edited second time.
			$res = $db->query("SELECT * FROM ptg_troubleticket");
			$num = $res->num_rows;
			// echo $num;

			$ticket_count = $num + 1;
			// echo $ticket_count;

			$bean->ticket_count_c = $ticket_count;
			// echo $bean->ticket_count_c;

			$ticket_number = sprintf("%06d", $ticket_count);
			// echo $ticket_number;

			$bean->ticket_number_c = $ticket_number;
			// print_r($bean->ticket_number_c);


			// exit();
		}
		else{
			
			$ticket_number = $bean->ticket_number_c;
			$bean->ticket_number_c = $ticket_number;
			// $bean->ticket_number_c = $ticket_number;
			// exit();
		}
	}
}

?>