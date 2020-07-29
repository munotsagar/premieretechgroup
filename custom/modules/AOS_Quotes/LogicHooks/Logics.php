<?php

if(!defined('sugarEntry') || !sugarEntry)
	die('not a valid entry point');

/**
 * 
 */
class Logics
{
	
	public function sendAlert(&$bean,$event,$arguments)
	{
		// global $bean, $GLOBALS;
		// echo "Hello from VoiceServiceRequest localhost";

		$bean_id = $bean->id;
		// print_r($bean);
		$quote_number = $bean->quote_number_c;
		$customer_name = $bean->customer_name_c;
		$company_name = $bean->company_name_c;
		$date_modified = $bean->date_modified;
		$redirect_url = 'index.php?module=AOS_Quotes&action=DetailView&record='.$bean_id;
		$query= "SELECT assigned_user_id FROM aos_quotes WHERE id= '$bean_id'";
		$assigned_user_id= $GLOBALS['db']->getOne($query);

		$alert = BeanFactory::newBean('Alerts');
		$alert->name = $quote_number."\n".$customer_name;
		$alert->description = $company_name."\n".$date_modified;
		$alert->url_redirect = $redirect_url;
		$alert->target_module = 'Quotes';
		$alert->assigned_user_id = '1';
		$alert->type = 'info';
		$alert->is_read = 0;
		$alert->save();
	}

	public function generateQuoteNumber(&$bean, $event, $arguments)
	{
		global $db;
		if($bean->quote_number_c == ""){ //Condition to avoid changing Ticket no. when edited second time.
			// echo "ín if condition";
			$res = $db->query("SELECT * FROM aos_quotes");
			$num = $res->num_rows;

			$quote_count = $num + 1;

			$bean->quote_count_c = $quote_count;

			$quote_number = sprintf("%06d", $quote_count);

			$bean->quote_number_c = $quote_number;

			$bean->employee_status_c = "Processing";
			$bean->vendor_status_c = "Processing";
			$bean->manager_status_c = "Processing";
			$bean->assigned_user_id = "";
		}
		
	}
}

?>