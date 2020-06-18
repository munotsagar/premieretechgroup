<?php

if(!defined('sugarEntry') || !sugarEntry)
	die('not a valid entry point');

/**
 * 
 */
class Logics
{
	
	public function createCustomerId(&$bean, $event, $arguments)
	{
		global $db;
		if($bean->customer_id_c == ""){ //Condition to avoid changing Ticket no. when edited second time.
			//echo "ín if condition";
			$res = $db->query("SELECT * FROM accounts");
			$num = $res->num_rows;

			$customer_count = $num + 1;

			$bean->customer_count_c = $customer_count;

			$customer_id = sprintf("%06d", $customer_count);

			$bean->customer_id_c = $customer_id;
		}		
	}
}