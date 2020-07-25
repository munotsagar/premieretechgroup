<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * 
 */
class Organization
{
	
	function assignOrganization($bean,$event,$arguments)
	{
		global $current_user;



                if($current_user->user_category_c == "Vendor") {
                
                        // $current_user_category = $current_user->user_category_c;
                        $organization_record_id = $current_user->ptg_organization_id_c;
                        // $organization_record_id = $current_user->organization_c;

                        // echo $organization_record_id;
                        // echo "<pre>";
                        // print_r($bean->ptg_organization_id_c);
                        // echo "</pre>";


                        // exit();

                        // $bean->ptg_organization_id_c = $organization_record_id;
                        $bean->ptg_organization_id_c = $organization_record_id;
                        // print_r($bean->organization_c);
                        // exit();
                        $bean->user_category_c = "Vendor";

                        // $verify = $bean->ptg_organization_id_c;
                }        
        

	}
}


?>