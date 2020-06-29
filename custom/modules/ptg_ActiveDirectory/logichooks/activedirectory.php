<?php
class ActiveDirectory
{
	public function addOUTemplates($bean, $event, $arguments)
	{
		$bean->ou_template_c= implode(", ", $_REQUEST['product_name']);
		//print_r($_REQUEST['product_name']);exit;
		
	}
}
?>