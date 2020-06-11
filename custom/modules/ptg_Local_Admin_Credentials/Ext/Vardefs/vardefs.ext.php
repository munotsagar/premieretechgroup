<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:19:25
$dictionary["ptg_Local_Admin_Credentials"]["fields"]["accounts_ptg_local_admin_credentials_1"] = array (
  'name' => 'accounts_ptg_local_admin_credentials_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_local_admin_credentials_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_LOCAL_ADMIN_CREDENTIALS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_local_admin_credentials_1accounts_ida',
);
$dictionary["ptg_Local_Admin_Credentials"]["fields"]["accounts_ptg_local_admin_credentials_1_name"] = array (
  'name' => 'accounts_ptg_local_admin_credentials_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_LOCAL_ADMIN_CREDENTIALS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_local_admin_credentials_1accounts_ida',
  'link' => 'accounts_ptg_local_admin_credentials_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Local_Admin_Credentials"]["fields"]["accounts_ptg_local_admin_credentials_1accounts_ida"] = array (
  'name' => 'accounts_ptg_local_admin_credentials_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_local_admin_credentials_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_LOCAL_ADMIN_CREDENTIALS_1_FROM_PTG_LOCAL_ADMIN_CREDENTIALS_TITLE',
);


// created: 2020-06-07 10:05:17
$dictionary["ptg_Local_Admin_Credentials"]["fields"]["users_ptg_local_admin_credentials_1"] = array (
  'name' => 'users_ptg_local_admin_credentials_1',
  'type' => 'link',
  'relationship' => 'users_ptg_local_admin_credentials_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_LOCAL_ADMIN_CREDENTIALS_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_local_admin_credentials_1users_ida',
);
$dictionary["ptg_Local_Admin_Credentials"]["fields"]["users_ptg_local_admin_credentials_1_name"] = array (
  'name' => 'users_ptg_local_admin_credentials_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_LOCAL_ADMIN_CREDENTIALS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_local_admin_credentials_1users_ida',
  'link' => 'users_ptg_local_admin_credentials_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Local_Admin_Credentials"]["fields"]["users_ptg_local_admin_credentials_1users_ida"] = array (
  'name' => 'users_ptg_local_admin_credentials_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_local_admin_credentials_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_LOCAL_ADMIN_CREDENTIALS_1_FROM_PTG_LOCAL_ADMIN_CREDENTIALS_TITLE',
);


 // created: 2020-06-05 10:16:11
$dictionary['ptg_Local_Admin_Credentials']['fields']['admin_login_c']['inline_edit']='1';
$dictionary['ptg_Local_Admin_Credentials']['fields']['admin_login_c']['labelValue']='Admin Login';

 

 // created: 2020-06-05 10:16:30
$dictionary['ptg_Local_Admin_Credentials']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_Local_Admin_Credentials']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 10:16:48
$dictionary['ptg_Local_Admin_Credentials']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Local_Admin_Credentials']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-08 06:26:53
$dictionary['ptg_Local_Admin_Credentials']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Local_Admin_Credentials']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Local_Admin_Credentials']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Local_Admin_Credentials']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-05 10:17:04
$dictionary['ptg_Local_Admin_Credentials']['fields']['name']['required']=false;
$dictionary['ptg_Local_Admin_Credentials']['fields']['name']['inline_edit']=true;
$dictionary['ptg_Local_Admin_Credentials']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ptg_Local_Admin_Credentials']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['ptg_Local_Admin_Credentials']['fields']['name']['merge_filter']='disabled';
$dictionary['ptg_Local_Admin_Credentials']['fields']['name']['unified_search']=false;

 
?>