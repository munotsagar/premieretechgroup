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

    // echo "<pre>";
    //     print_r($current_user->id);
    // echo "<pre>";

    // $id1='b0a580d1-3466-1950-2a11-5f04bd8c068e';
    //Get the status of each entity
    $TTBean = BeanFactory::getBean('ptg_TroubleTicket', $id);
    // print_r($TTBean);
    // echo $TTBean;//Not working
    $employee_status = $TTBean->employee_status_c;
    echo $employee_status."\n";

    $vendor_status = $TTBean->vendor_status_c;
    echo $vendor_status."\n";

    $manager_status = $TTBean->manager_status_c;
    echo $manager_status."\n";

    $assigned_user_id = $TTBean->assigned_user_id;
    echo $assigned_user_id."\n";

    $trouble_ticket_amount = $TTBean->trouble_ticket_amount_c;
    echo $trouble_ticket_amount."\n";

    //Check the status & do customization
    if($employee_status == 'Accepted' && $vendor_status == 'Accepted' && $manager_status == 'Accepted'){
        echo "Status if";
        $query="SELECT * FROM ptg_troubleticketemployeecommission_cstm WHERE ptg_troubleticket_id_c='".$id."'";
        $result=$db->query($query);
        $num=$result->num_rows;
        echo $num;

        $UsersBean = BeanFactory::getBean('Users', $assigned_user_id);
        $commission_type = $UsersBean->commission_type_c;
        echo $commission_type."\n";
        // $commission_amount = $UsersBean->commission_c;
        // echo $commission_amount."\n";
        $tt_commission = $UsersBean->trouble_ticket_commission_c;
        echo $tt_commission."\n";

        if($commission_type == "Amount"){
            $final_commission = $tt_commission;
            echo $final_commission."\n";
        }
        if ($commission_type == "Percentage") {
            $final_commission = ($tt_commission * $trouble_ticket_amount) /100;
            echo $final_commission."\n";    
        }

    //Now create if doesn't exist or update record if there exist
        if($num >= 1) {
            //Update existing record
            $query1="SELECT * FROM ptg_troubleticketemployeecommission_cstm WHERE ptg_troubleticket_id_c='".$id."'";
            $result1= $db->query($query1);
            $result2=$db->fetchByAssoc($result1);
            $record_id= $result2['id_c'];
            // echo $record_id;
            $CommissionBean = BeanFactory::getBean ('ptg_TroubleTicketEmployeeCommission',$record_id);
            $CommissionBean->user_id_c = $assigned_user_id;
            $CommissionBean->ptg_troubleticket_id_c = $id;
            $CommissionBean->amount_c = $trouble_ticket_amount;
            $CommissionBean->commission_type_c = $commission_type;
            $CommissionBean->commission_c = $final_commission;

            $CommissionBean->save();
            print_r("Record exist. Updated it.");
          } 
        else {
            //create record 
            echo "else Create record";
            $CommissionBean = BeanFactory::newBean ('ptg_TroubleTicketEmployeeCommission');
            $CommissionBean->user_id_c = $assigned_user_id;
            $CommissionBean->ptg_troubleticket_id_c = $id;
            $CommissionBean->amount_c = $trouble_ticket_amount;
            $CommissionBean->commission_type_c = $commission_type;
            $CommissionBean->commission_c = $final_commission;

            $CommissionBean->save();

        }
    }




?>