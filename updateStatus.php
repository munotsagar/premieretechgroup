<?php
	define('sugarEntry', TRUE);
	include_once('include/entryPoint.php');
    global $current_user, $app_list_strings;

    global $db;
    global $current_user;
    $quoteid = $_POST['quoteid'];
    $employee_status_c = $_POST['employee_status_c'];
    $vendor_status_c = $_POST['vendor_status_c'];
    $manager_status_c = $_POST['manager_status_c'];

    if($employee_status_c) {
    	$db->query("update aos_quotes_cstm set employee_status_c = '".$employee_status_c."' where id_c = '".$quoteid."'");
    }

    if($vendor_status_c) {
    	$db->query("update aos_quotes_cstm set vendor_status_c = '".$vendor_status_c."' where id_c = '".$quoteid."'");
    }

    if($manager_status_c) {
    	$db->query("update aos_quotes_cstm set manager_status_c = '".$manager_status_c."' where id_c = '".$quoteid."'");
    }




    /*Below script is for calculating Employee & Vendor Commission by creating or updating the record, when all status are  'Accepted' */
    //Get the status of each entity
    $QuoteBean = BeanFactory::getBean('AOS_Quotes', $quoteid);
    $employee_status = $QuoteBean->employee_status_c;
    $vendor_status = $QuoteBean->vendor_status_c;
    $manager_status = $QuoteBean->manager_status_c;
    $assigned_user_id = $QuoteBean->assigned_user_id;
    $quotation_amount = $QuoteBean->quotation_amount_c;
    $created_by = $QuoteBean->created_by;
    $servicesDropDown = $app_list_strings['services_products_list'];
    $check_services = unencodeMultienum($QuoteBean->services_products_c);
    
    //Check the status
    if($employee_status == 'Accepted' && $vendor_status == 'Accepted' && $manager_status == 'Accepted'){
        // echo $employee_status."\n".$vendor_status."\n".$manager_status;
    /*Employee Commission-Quotation: Check the record exist or not. IF exist then update it & if not then create it in Employee Commission module */    
        $query="SELECT * FROM  ptg_employeecommission_cstm WHERE aos_quotes_id_c ='".$quoteid."'";

        $result=$db->query($query);
        $num=$result->num_rows;

        $UsersBean = BeanFactory::getBean('Users', $assigned_user_id);
        $commission_type = $UsersBean->commission_type_c;
        $quote_commission = $UsersBean->commission_c;
        $VoiceServicesCommissionAmount = 0; 
        $LocalServicesCommissionAmount = 0; 
        $DataServicesCommissionAmount = 0; 
        $CloudServicesCommissionAmount = 0; 
        $OtherServicesCommissionAmount = 0; 


        foreach($check_services as $key=>$value)
        {

            if($servicesDropDown[$value] == 'Voice Services'){
                $VoiceServicesCommissionAmount = $UsersBean->voice_service_c;
            }
            if($servicesDropDown[$value] == 'Local Services'){
                $LocalServicesCommissionAmount = $UsersBean->local_service_c;
            }
            if($servicesDropDown[$value] == 'Data Services'){
                $DataServicesCommissionAmount = $UsersBean->data_service_c;
            }
            if($servicesDropDown[$value] == 'Cloud Services'){
                $CloudServicesCommissionAmount = $UsersBean->cloud_service_c;
            }
            if($servicesDropDown[$value] == 'Other Services'){
             $OtherServicesCommissionAmount = $UsersBean->other_service_c;
            }
        }
        
        $total_commission =  $VoiceServicesCommissionAmount +
        $LocalServicesCommissionAmount +
        $DataServicesCommissionAmount +
        $CloudServicesCommissionAmount + 
        $OtherServicesCommissionAmount; 
 
        if($commission_type == "Amount"){
            $calc_commission = $quote_commission;
        }
        if ($commission_type == "Percentage") {
            $calc_commission = ($quote_commission * $quotation_amount)/100;
        }

        if ($total_commission > $calc_commission) {
            $final_commission = $total_commission;
        }else{
            $final_commission = $calc_commission;
        }

        //Now create if doesn't exist or update record if there exist
        if($num >= 1) {
            //Update existing record
            $query1="SELECT * FROM  ptg_employeecommission_cstm WHERE aos_quotes_id_c='".$quoteid."'";
            $result1= $db->query($query1);
            $result2=$db->fetchByAssoc($result1);
            $record_id= $result2['id_c'];

            $CommissionBean = BeanFactory::getBean ('ptg_EmployeeCommission',$record_id);
            $CommissionBean->user_id_c = $assigned_user_id;
            $CommissionBean->aos_quotes_id_c = $quoteid;
            $CommissionBean->commission_type_c = $commission_type;
            $CommissionBean->commission_c = $quote_commission;
            $CommissionBean->amount_c = $quotation_amount;
            $CommissionBean->voice_services_commission_c = $VoiceServicesCommissionAmount;
            $CommissionBean->local_services_commission_c = $LocalServicesCommissionAmount;
            $CommissionBean->data_services_commission_c = $DataServicesCommissionAmount;
            $CommissionBean->cloud_services_commission_c = $CloudServicesCommissionAmount;
            $CommissionBean->other_services_commission_c = $OtherServicesCommissionAmount;
            $CommissionBean->total_commission_amount_c = $total_commission;
            $CommissionBean->employee_commission_c = $final_commission;

            $CommissionBean->save();
          } 
        else {
            //create record 
            $CommissionBean = BeanFactory::newBean ('ptg_EmployeeCommission');
            $CommissionBean->user_id_c = $assigned_user_id;
            $CommissionBean->aos_quotes_id_c = $quoteid;
            $CommissionBean->commission_type_c = $commission_type;
            $CommissionBean->commission_c = $quote_commission;
            $CommissionBean->amount_c = $quotation_amount;
            $CommissionBean->voice_services_commission_c = $VoiceServicesCommissionAmount;
            $CommissionBean->local_services_commission_c = $LocalServicesCommissionAmount;
            $CommissionBean->data_services_commission_c = $DataServicesCommissionAmount;
            $CommissionBean->cloud_services_commission_c = $CloudServicesCommissionAmount;
            $CommissionBean->other_services_commission_c = $OtherServicesCommissionAmount;
            $CommissionBean->total_commission_amount_c = $total_commission;
            $CommissionBean->employee_commission_c = $final_commission;

            $CommissionBean->save();
        }



    /*Vendor Commission-Quotation: Check the record exist or not. If exist then update it & if not then create it in Vendor Commission module.*/
        $check_query="SELECT * FROM ptg_vendorcommission_cstm WHERE aos_quotes_id_c='".$quoteid."'";
        $check_result=$db->query($check_query);
        $check_num_vendor=$check_result->num_rows;

        $UsersBean_vendor = BeanFactory::getBean('Users', $created_by);
        $commission_type_vendor = $UsersBean_vendor->commission_type_c;
        $quote_commission_vendor = $UsersBean_vendor->commission_c;

        $VoiceServicesCommissionAmountVendor = 0; 
        $LocalServicesCommissionAmountVendor = 0; 
        $DataServicesCommissionAmountVendor = 0; 
        $CloudServicesCommissionAmountVendor = 0; 
        $OtherServicesCommissionAmountVendor = 0; 

        foreach($check_services as $key=>$value)
        {
            if($servicesDropDown[$value] == 'Voice Services'){
                $VoiceServicesCommissionAmountVendor = $UsersBean_vendor->voice_service_c;
            }
            if($servicesDropDown[$value] == 'Local Services'){
                $LocalServicesCommissionAmountVendor = $UsersBean_vendor->local_service_c;
            }
            if($servicesDropDown[$value] == 'Data Services'){
                $DataServicesCommissionAmountVendor = $UsersBean_vendor->data_service_c;
            }
            if($servicesDropDown[$value] == 'Cloud Services'){
                $CloudServicesCommissionAmountVendor = $UsersBean_vendor->cloud_service_c;
            }
            if($servicesDropDown[$value] == 'Other Services'){
             $OtherServicesCommissionAmountVendor = $UsersBean_vendor->other_service_c;
            }
        }
        
        $total_commission_vendor =  $VoiceServicesCommissionAmountVendor +
        $LocalServicesCommissionAmountVendor +
        $DataServicesCommissionAmountVendor +
        $CloudServicesCommissionAmountVendor + 
        $OtherServicesCommissionAmountVendor; 

        if($commission_type_vendor == "Amount"){
            $calc_commission_vendor = $quote_commission_vendor;
        }
        if ($commission_type_vendor == "Percentage") {
            $calc_commission_vendor = ($quote_commission_vendor * $quotation_amount)/100;
        }
        if ($total_commission_vendor > $calc_commission_vendor) {
            $final_commission_vendor = $total_commission_vendor;
        }else{
            $final_commission_vendor = $calc_commission_vendor;
        }

    //Now create if doesn't exist or update record if there exist
        if($check_num_vendor >= 1) {
            //Update existing record
            $query_id="SELECT * FROM ptg_vendorcommission_cstm WHERE aos_quotes_id_c='".$quoteid."'";
            $result_id= $db->query($query_id);
            $result_id1=$db->fetchByAssoc($result_id);
            $record_id_vendor= $result_id1['id_c'];
            $VendorCommissionBean = BeanFactory::getBean('ptg_VendorCommission',$record_id_vendor);
            $VendorCommissionBean->user_id_c = $created_by;
            $VendorCommissionBean->aos_quotes_id_c = $quoteid;
            $VendorCommissionBean->commission_type_c = $commission_type_vendor;
            $VendorCommissionBean->commission_c = $quote_commission_vendor;
            $VendorCommissionBean->amount_c = $quotation_amount;
            $VendorCommissionBean->voice_services_commission_c = $VoiceServicesCommissionAmountVendor;
            $VendorCommissionBean->local_services_commission_c = $LocalServicesCommissionAmountVendor;
            $VendorCommissionBean->data_services_commission_c = $DataServicesCommissionAmountVendor;
            $VendorCommissionBean->cloud_services_commission_c = $CloudServicesCommissionAmountVendor;
            $VendorCommissionBean->other_services_commission_c = $OtherServicesCommissionAmountVendor;
            $VendorCommissionBean->totalcommissionamount_c = $total_commission_vendor;
            $VendorCommissionBean->employee_commission_c = $final_commission_vendor;
            
            $VendorCommissionBean->save();
          } 
        else {
            //create record 
            $VendorCommissionBean = BeanFactory::newBean('ptg_VendorCommission');
            $VendorCommissionBean->user_id_c = $created_by;
            $VendorCommissionBean->aos_quotes_id_c = $quoteid;
            $VendorCommissionBean->commission_type_c = $commission_type_vendor;
            $VendorCommissionBean->commission_c = $quote_commission_vendor;
            $VendorCommissionBean->amount_c = $quotation_amount;
            $VendorCommissionBean->voice_services_commission_c = $VoiceServicesCommissionAmountVendor;
            $VendorCommissionBean->local_services_commission_c = $LocalServicesCommissionAmountVendor;
            $VendorCommissionBean->data_services_commission_c = $DataServicesCommissionAmountVendor;
            $VendorCommissionBean->cloud_services_commission_c = $CloudServicesCommissionAmountVendor;
            $VendorCommissionBean->other_services_commission_c = $OtherServicesCommissionAmountVendor;
            $VendorCommissionBean->totalcommissionamount_c = $total_commission_vendor;
            $VendorCommissionBean->employee_commission_c = $final_commission_vendor;
            
            $VendorCommissionBean->save();
            }
    }


?>