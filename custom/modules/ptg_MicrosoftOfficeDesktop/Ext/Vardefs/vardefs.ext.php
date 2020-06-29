<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-08 17:45:07
$dictionary["ptg_MicrosoftOfficeDesktop"]["fields"]["users_ptg_microsoftofficedesktop_1"] = array (
  'name' => 'users_ptg_microsoftofficedesktop_1',
  'type' => 'link',
  'relationship' => 'users_ptg_microsoftofficedesktop_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_MICROSOFTOFFICEDESKTOP_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_microsoftofficedesktop_1users_ida',
);
$dictionary["ptg_MicrosoftOfficeDesktop"]["fields"]["users_ptg_microsoftofficedesktop_1_name"] = array (
  'name' => 'users_ptg_microsoftofficedesktop_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_MICROSOFTOFFICEDESKTOP_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_microsoftofficedesktop_1users_ida',
  'link' => 'users_ptg_microsoftofficedesktop_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_MicrosoftOfficeDesktop"]["fields"]["users_ptg_microsoftofficedesktop_1users_ida"] = array (
  'name' => 'users_ptg_microsoftofficedesktop_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_microsoftofficedesktop_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_MICROSOFTOFFICEDESKTOP_1_FROM_PTG_MICROSOFTOFFICEDESKTOP_TITLE',
);


// created: 2020-06-08 17:33:44
$dictionary["ptg_MicrosoftOfficeDesktop"]["fields"]["accounts_ptg_microsoftofficedesktop_1"] = array (
  'name' => 'accounts_ptg_microsoftofficedesktop_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_microsoftofficedesktop_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_MICROSOFTOFFICEDESKTOP_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_microsoftofficedesktop_1accounts_ida',
);
$dictionary["ptg_MicrosoftOfficeDesktop"]["fields"]["accounts_ptg_microsoftofficedesktop_1_name"] = array (
  'name' => 'accounts_ptg_microsoftofficedesktop_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_MICROSOFTOFFICEDESKTOP_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_microsoftofficedesktop_1accounts_ida',
  'link' => 'accounts_ptg_microsoftofficedesktop_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_MicrosoftOfficeDesktop"]["fields"]["accounts_ptg_microsoftofficedesktop_1accounts_ida"] = array (
  'name' => 'accounts_ptg_microsoftofficedesktop_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_microsoftofficedesktop_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_MICROSOFTOFFICEDESKTOP_1_FROM_PTG_MICROSOFTOFFICEDESKTOP_TITLE',
);


 // created: 2020-06-08 15:28:40
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['document_name']['required']=false;
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-20 14:51:40
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['username_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['username_c']['labelValue']='Username';

 

 // created: 2020-06-20 14:51:51
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['admin_login_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['admin_login_c']['labelValue']='Admin Login';

 

 // created: 2020-06-08 15:28:25
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['active_date']['required']=false;
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-20 14:52:07
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-08 15:27:43
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['approval_not_needed_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['approval_not_needed_c']['labelValue']='Approval not needed';

 

 // created: 2020-06-20 14:55:42
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['license_type_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['license_type_c']['labelValue']='License Type';

 

 // created: 2020-06-20 14:54:05
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['confirm_password_c']['labelValue']='Confirm password';

 

 // created: 2020-06-08 15:25:34
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['approval_requester_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['approval_requester_c']['labelValue']='Approval requester';

 

 // created: 2020-06-08 15:28:09
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['description']['inline_edit']=true;
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_MicrosoftOfficeDesktop']['fields']['description']['merge_filter']='disabled';

 
?>