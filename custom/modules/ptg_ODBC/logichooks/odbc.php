<?php
class ODBc
{
	public function add_ODBC_Connection($bean, $event, $arguments)
	{
		$bean->odbc_connection_c= implode(", ", $_REQUEST['product_name']);
		//print_r($_REQUEST['product_name']);exit;
		
	}
}
?>