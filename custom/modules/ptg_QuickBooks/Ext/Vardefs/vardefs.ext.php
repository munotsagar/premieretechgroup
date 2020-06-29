<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:33:37
$dictionary["ptg_QuickBooks"]["fields"]["accounts_ptg_quickbooks_1"] = array (
  'name' => 'accounts_ptg_quickbooks_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_quickbooks_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_QUICKBOOKS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_quickbooks_1accounts_ida',
);
$dictionary["ptg_QuickBooks"]["fields"]["accounts_ptg_quickbooks_1_name"] = array (
  'name' => 'accounts_ptg_quickbooks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_QUICKBOOKS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_quickbooks_1accounts_ida',
  'link' => 'accounts_ptg_quickbooks_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_QuickBooks"]["fields"]["accounts_ptg_quickbooks_1accounts_ida"] = array (
  'name' => 'accounts_ptg_quickbooks_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_quickbooks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_QUICKBOOKS_1_FROM_PTG_QUICKBOOKS_TITLE',
);


// created: 2020-06-07 10:28:25
$dictionary["ptg_QuickBooks"]["fields"]["users_ptg_quickbooks_1"] = array (
  'name' => 'users_ptg_quickbooks_1',
  'type' => 'link',
  'relationship' => 'users_ptg_quickbooks_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_QUICKBOOKS_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_quickbooks_1users_ida',
);
$dictionary["ptg_QuickBooks"]["fields"]["users_ptg_quickbooks_1_name"] = array (
  'name' => 'users_ptg_quickbooks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_QUICKBOOKS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_quickbooks_1users_ida',
  'link' => 'users_ptg_quickbooks_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_QuickBooks"]["fields"]["users_ptg_quickbooks_1users_ida"] = array (
  'name' => 'users_ptg_quickbooks_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_quickbooks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_QUICKBOOKS_1_FROM_PTG_QUICKBOOKS_TITLE',
);


 // created: 2020-06-06 06:25:06
$dictionary['ptg_QuickBooks']['fields']['document_name']['required']=false;
$dictionary['ptg_QuickBooks']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_QuickBooks']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_QuickBooks']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-20 15:08:42
$dictionary['ptg_QuickBooks']['fields']['username_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['username_c']['labelValue']='Username';

 

 // created: 2020-06-20 15:08:29
$dictionary['ptg_QuickBooks']['fields']['admin_login_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['admin_login_c']['labelValue']='Admin Login';

 

 // created: 2020-06-06 06:25:16
$dictionary['ptg_QuickBooks']['fields']['active_date']['required']=false;
$dictionary['ptg_QuickBooks']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_QuickBooks']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_QuickBooks']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-20 15:08:57
$dictionary['ptg_QuickBooks']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-20 15:09:13
$dictionary['ptg_QuickBooks']['fields']['confirm_password__c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['confirm_password__c']['labelValue']='Confirm password';

 

 // created: 2020-06-06 06:38:21
$dictionary['ptg_QuickBooks']['fields']['approval_not_needed_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['approval_not_needed_c']['labelValue']='Approval not needed';

 

 // created: 2020-06-20 15:08:17
$dictionary['ptg_QuickBooks']['fields']['license_type_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['license_type_c']['labelValue']='License type';

 

 // created: 2020-06-06 06:36:30
$dictionary['ptg_QuickBooks']['fields']['approval_requester_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['approval_requester_c']['labelValue']='Approval requester';

 

 // created: 2020-06-08 07:35:33
$dictionary['ptg_QuickBooks']['fields']['description']['inline_edit']=true;
$dictionary['ptg_QuickBooks']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_QuickBooks']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_QuickBooks']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-20 15:10:43
$dictionary['ptg_QuickBooks']['fields']['product_type_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['product_type_c']['labelValue']='Product Type';

 
?>