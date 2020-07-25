<?php
	define('sugarEntry', TRUE);
	include_once('include/entryPoint.php');
    global $db;
    global $current_user;
    $quoteid = $_POST['quoteid'];
    $userid = $_POST['userid'];
    $flag = $_POST['flag'];

    if($flag == "assign") {
    	$query = "update aos_quotes set assigned_user_id = '".$userid."', date_modified = '".date('Y-m-d H:i:s')."' where id='".$quoteid."'";
    	echo $query;
    	$db->query($query);


        $beanQuotes = BeanFactory::getBean('AOS_Quotes', $quoteid);

        $id = $beanQuotes->id;
        $quote_number = $beanQuotes->quote_number_c;
        $customer_name = $beanQuotes->customer_name_c;
        $company_name = $beanQuotes->company_name_c;
        $date_modified = $beanQuotes->date_modified;
        $created_by = $beanQuotes->created_by;

        $redirect_url = 'index.php?module=AOS_Quotes&action=DetailView&record='.$id;     
        $query2= "SELECT * FROM users WHERE id= '".$userid."'";
        $users_result = $db->query($query2, true,"Error reading number of  fields: ");
        $users_row = $db->fetchByAssoc($users_result);
        $first_name = $users_row['first_name'];
        $last_name = $users_row['last_name'];


        $alert = BeanFactory::newBean('Alerts');
        $alert->name = $quote_number. "\nAssigned to ".$first_name." ".$last_name;
        $alert->description = $customer_name."\n".$company_name."\n".$date_modified;
        $alert->url_redirect = $redirect_url;
        $alert->target_module = 'Quotes';
        $alert->assigned_user_id = $created_by;
        $alert->type = 'info';
        $alert->is_read = 0;
        $alert->save();
    } else {
    	$query = "update aos_quotes set assigned_user_id = '' where id='".$quoteid."'";
    	$db->query($query);
    }
    
?> 