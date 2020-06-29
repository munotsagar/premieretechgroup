<?php
class Resources
{
	public function add_Resource_Server($bean, $event, $arguments)
	{
		$bean->resource_directory_c= implode(", ", $_REQUEST['product_name']);
		//print_r($_REQUEST['product_name']);exit;
		
	}
}
?>