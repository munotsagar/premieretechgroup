<?php
    define('sugarEntry', TRUE);
    include_once('include/entryPoint.php');
    global $db;
    global $current_user;
    $id = $_POST['ticketid'];
    $employee_status_c = $_POST['employee_status_c'];
    $vendor_status_c = $_POST['vendor_status_c'];
    $manager_status_c = $_POST['manager_status_c'];

    if($employee_status_c) {
        $db->query("update ptg_troubleticket_cstm set employee_status_c = '".$employee_status_c."' where id_c = '".$id."'");
    }

    if($vendor_status_c) {
        $db->query("update ptg_troubleticket_cstm set vendor_status_c = '".$vendor_status_c."' where id_c = '".$id."'");
    }

    if($manager_status_c) {
        $db->query("update ptg_troubleticket_cstm set manager_status_c = '".$manager_status_c."' where id_c = '".$id."'");
    }

    /*Below script is for calculating Employee & Vendor Commission by creating or updating the record, when all status are become Accepted */
    //Get the status of each entity
    $TTBean = BeanFactory::getBean('ptg_TroubleTicket', $id);
    $employee_status = $TTBean->employee_status_c;
    $vendor_status = $TTBean->vendor_status_c;
    $manager_status = $TTBean->manager_status_c;
    $assigned_user_id = $TTBean->assigned_user_id;
    $trouble_ticket_amount = $TTBean->trouble_ticket_amount_c;
    $created_by = $TTBean->created_by;

    //Check the status
    if($employee_status == 'Accepted' && $vendor_status == 'Accepted' && $manager_status == 'Accepted'){

    /*Trouble Ticket Employee Commission: Check the record exist or not. IF exist then update it & if not then create it in Trouble Ticket Employee Commission module */    
        $query="SELECT * FROM ptg_troubleticketemployeecommission_cstm WHERE ptg_troubleticket_id_c='".$id."'";
        $result=$db->query($query);
        $num=$result->num_rows;

        $UsersBean = BeanFactory::getBean('Users', $assigned_user_id);
        $commission_type = $UsersBean->commission_type_c;
        $tt_commission = $UsersBean->commission_c;
        $TroubleTicketCommissionAmount = $UsersBean->trouble_ticket_commission_c;

        if($commission_type == "Amount"){
            $calc_commission = $tt_commission;
        }
        if ($commission_type == "Percentage") {
            $calc_commission = ($tt_commission * $trouble_ticket_amount) /100;
        }
        if ($TroubleTicketCommissionAmount > $calc_commission) {
            $final_commission = $TroubleTicketCommissionAmount;
        }else{
            $final_commission = $calc_commission;
        }

        //Now create if doesn't exist or update record if there exist
        if($num >= 1) {
            //Update existing record
            $query1="SELECT * FROM ptg_troubleticketemployeecommission_cstm WHERE ptg_troubleticket_id_c='".$id."'";
            $result1= $db->query($query1);
            $result2=$db->fetchByAssoc($result1);
            $record_id= $result2['id_c'];
            $CommissionBean = BeanFactory::getBean ('ptg_TroubleTicketEmployeeCommission',$record_id);
            $CommissionBean->user_id_c = $assigned_user_id;
            $CommissionBean->ptg_troubleticket_id_c = $id;
            $CommissionBean->commission_type_c = $commission_type;
            $CommissionBean->commission_c = $tt_commission;
            $CommissionBean->troubleticketcommissionamt_c = $TroubleTicketCommissionAmount;
            $CommissionBean->amount_c = $trouble_ticket_amount;
            $CommissionBean->employee_commission_c = $final_commission;

            $CommissionBean->save();
          } 
        else {
            //create record 
            $CommissionBean = BeanFactory::newBean ('ptg_TroubleTicketEmployeeCommission');
            $CommissionBean->user_id_c = $assigned_user_id;
            $CommissionBean->ptg_troubleticket_id_c = $id;
            $CommissionBean->commission_type_c = $commission_type;
            $CommissionBean->commission_c = $tt_commission;
            $CommissionBean->troubleticketcommissionamt_c = $TroubleTicketCommissionAmount;
            $CommissionBean->amount_c = $trouble_ticket_amount;
            $CommissionBean->employee_commission_c = $final_commission;

            $CommissionBean->save();
        }



    /*Trouble Ticket Vendor Commission: Check the record exist or not. If exist then update it & if not then create it in Trouble Ticket Vendor Commission module.*/
        $check_query="SELECT * FROM ptg_troubleticketvendorcommission_cstm WHERE ptg_troubleticket_id_c='".$id."'";
        $check_result=$db->query($check_query);
        $check_num_vendor=$check_result->num_rows;

        $UsersBean_vendor = BeanFactory::getBean('Users', $created_by);
        $commission_type_vendor = $UsersBean_vendor->commission_type_c;
        $tt_commission_vendor = $UsersBean_vendor->commission_c;
        $TroubleTicketCommissionAmountVendor = $UsersBean->trouble_ticket_commission_c;

        if($commission_type_vendor == "Amount"){
            $calc_commission_vendor = $tt_commission_vendor;
        }
        if ($commission_type_vendor == "Percentage") {
            $calc_commission_vendor = ($tt_commission_vendor * $trouble_ticket_amount) /100;
        }
        if ($TroubleTicketCommissionAmountVendor > $calc_commission_vendor) {
            $final_commission_vendor = $TroubleTicketCommissionAmountVendor;
        }else{
            $final_commission_vendor = $calc_commission_vendor;
        }

    //Now create if doesn't exist or update record if there exist
        if($check_num_vendor >= 1) {
            //Update existing record
            $query_id="SELECT * FROM ptg_troubleticketvendorcommission_cstm WHERE ptg_troubleticket_id_c='".$id."'";
            $result_id= $db->query($query_id);
            $result_id1=$db->fetchByAssoc($result_id);
            $record_id_vendor= $result_id1['id_c'];
            $VendorCommissionBean = BeanFactory::getBean ('ptg_TroubleTicketVendorCommission',$record_id_vendor);
            $VendorCommissionBean->user_id_c = $created_by;
            $VendorCommissionBean->ptg_troubleticket_id_c = $id;
            $VendorCommissionBean->commission_type_c = $commission_type_vendor;
            $VendorCommissionBean->commission_c = $tt_commission_vendor;
            $VendorCommissionBean->troubleticketcommissionamt_c = $TroubleTicketCommissionAmountVendor;
            $VendorCommissionBean->amount_c = $trouble_ticket_amount;
            $VendorCommissionBean->vendor_commission_c = $final_commission_vendor;

            $VendorCommissionBean->save();
          } 
        else {
            //create record 
            $VendorCommissionBean = BeanFactory::newBean ('ptg_TroubleTicketVendorCommission');
            $VendorCommissionBean->user_id_c = $created_by;
            $VendorCommissionBean->ptg_troubleticket_id_c = $id;
            $VendorCommissionBean->commission_type_c = $commission_type_vendor;
            $VendorCommissionBean->commission_c = $tt_commission_vendor;
            $VendorCommissionBean->troubleticketcommissionamt_c = $TroubleTicketCommissionAmountVendor;
            $VendorCommissionBean->amount_c = $trouble_ticket_amount;
            $VendorCommissionBean->vendor_commission_c = $final_commission_vendor;

            $VendorCommissionBean->save();

            }
    }


?>