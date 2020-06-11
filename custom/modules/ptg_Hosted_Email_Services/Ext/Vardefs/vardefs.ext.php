<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:21:02
$dictionary["ptg_Hosted_Email_Services"]["fields"]["accounts_ptg_hosted_email_services_1"] = array (
  'name' => 'accounts_ptg_hosted_email_services_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_hosted_email_services_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTED_EMAIL_SERVICES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_hosted_email_services_1accounts_ida',
);
$dictionary["ptg_Hosted_Email_Services"]["fields"]["accounts_ptg_hosted_email_services_1_name"] = array (
  'name' => 'accounts_ptg_hosted_email_services_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTED_EMAIL_SERVICES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_hosted_email_services_1accounts_ida',
  'link' => 'accounts_ptg_hosted_email_services_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Hosted_Email_Services"]["fields"]["accounts_ptg_hosted_email_services_1accounts_ida"] = array (
  'name' => 'accounts_ptg_hosted_email_services_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_hosted_email_services_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTED_EMAIL_SERVICES_1_FROM_PTG_HOSTED_EMAIL_SERVICES_TITLE',
);


// created: 2020-06-07 10:11:49
$dictionary["ptg_Hosted_Email_Services"]["fields"]["users_ptg_hosted_email_services_1"] = array (
  'name' => 'users_ptg_hosted_email_services_1',
  'type' => 'link',
  'relationship' => 'users_ptg_hosted_email_services_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_HOSTED_EMAIL_SERVICES_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_hosted_email_services_1users_ida',
);
$dictionary["ptg_Hosted_Email_Services"]["fields"]["users_ptg_hosted_email_services_1_name"] = array (
  'name' => 'users_ptg_hosted_email_services_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_HOSTED_EMAIL_SERVICES_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_hosted_email_services_1users_ida',
  'link' => 'users_ptg_hosted_email_services_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Hosted_Email_Services"]["fields"]["users_ptg_hosted_email_services_1users_ida"] = array (
  'name' => 'users_ptg_hosted_email_services_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_hosted_email_services_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_HOSTED_EMAIL_SERVICES_1_FROM_PTG_HOSTED_EMAIL_SERVICES_TITLE',
);


 // created: 2020-06-05 10:52:30
$dictionary['ptg_Hosted_Email_Services']['fields']['login_password_c']['inline_edit']='1';
$dictionary['ptg_Hosted_Email_Services']['fields']['login_password_c']['labelValue']='Login Password';

 

 // created: 2020-06-05 10:51:29
$dictionary['ptg_Hosted_Email_Services']['fields']['admin_portal_url_c']['inline_edit']='1';
$dictionary['ptg_Hosted_Email_Services']['fields']['admin_portal_url_c']['labelValue']='Admin Portal URL';

 

 // created: 2020-06-05 10:50:55
$dictionary['ptg_Hosted_Email_Services']['fields']['provider_c']['inline_edit']='1';
$dictionary['ptg_Hosted_Email_Services']['fields']['provider_c']['labelValue']='Provider';

 

 // created: 2020-06-05 10:40:41
$dictionary['ptg_Hosted_Email_Services']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_Hosted_Email_Services']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-05 10:52:45
$dictionary['ptg_Hosted_Email_Services']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Hosted_Email_Services']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-08 06:39:03
$dictionary['ptg_Hosted_Email_Services']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Hosted_Email_Services']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Hosted_Email_Services']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Hosted_Email_Services']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-05 10:52:05
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['required']=false;
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['inline_edit']=true;
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['help']='User Login Name';
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['comments']='User Login Name';
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['merge_filter']='disabled';
$dictionary['ptg_Hosted_Email_Services']['fields']['name']['unified_search']=false;

 
?>