<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:20:16
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["accounts_ptg_onpremise_email_services_1"] = array (
  'name' => 'accounts_ptg_onpremise_email_services_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_onpremise_email_services_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_onpremise_email_services_1accounts_ida',
);
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["accounts_ptg_onpremise_email_services_1_name"] = array (
  'name' => 'accounts_ptg_onpremise_email_services_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_onpremise_email_services_1accounts_ida',
  'link' => 'accounts_ptg_onpremise_email_services_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["accounts_ptg_onpremise_email_services_1accounts_ida"] = array (
  'name' => 'accounts_ptg_onpremise_email_services_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_onpremise_email_services_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_PTG_ONPREMISE_EMAIL_SERVICES_TITLE',
);


 // created: 2020-06-05 10:23:23
$dictionary['ptg_OnPremise_Email_Services']['fields']['ip_address__c']['inline_edit']='1';
$dictionary['ptg_OnPremise_Email_Services']['fields']['ip_address__c']['labelValue']='IP Address';

 

 // created: 2020-06-05 10:24:05
$dictionary['ptg_OnPremise_Email_Services']['fields']['login_password_c']['inline_edit']='1';
$dictionary['ptg_OnPremise_Email_Services']['fields']['login_password_c']['labelValue']='Login Password';

 

 // created: 2020-06-05 10:23:47
$dictionary['ptg_OnPremise_Email_Services']['fields']['user_login_name_c']['inline_edit']='1';
$dictionary['ptg_OnPremise_Email_Services']['fields']['user_login_name_c']['labelValue']='User Login Name';

 

 // created: 2020-06-05 10:29:22
$dictionary['ptg_OnPremise_Email_Services']['fields']['server_roles_c']['inline_edit']='1';
$dictionary['ptg_OnPremise_Email_Services']['fields']['server_roles_c']['labelValue']='Server roles';

 

 // created: 2020-06-05 10:24:23
$dictionary['ptg_OnPremise_Email_Services']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_OnPremise_Email_Services']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 10:21:23
$dictionary['ptg_OnPremise_Email_Services']['fields']['vpn_ip_address_c']['inline_edit']='1';
$dictionary['ptg_OnPremise_Email_Services']['fields']['vpn_ip_address_c']['labelValue']='VPN IP Address';

 

 // created: 2020-06-05 10:21:51
$dictionary['ptg_OnPremise_Email_Services']['fields']['name']['required']=false;

 

 // created: 2020-06-05 10:32:26
$dictionary['ptg_OnPremise_Email_Services']['fields']['hybrid_configuration_c']['inline_edit']='1';
$dictionary['ptg_OnPremise_Email_Services']['fields']['hybrid_configuration_c']['labelValue']='This site uses a hybrid configuration with mailbox databases kept locally.  Please add details.';

 
?>