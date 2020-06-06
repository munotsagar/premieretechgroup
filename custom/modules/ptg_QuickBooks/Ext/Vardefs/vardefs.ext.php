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


 // created: 2020-06-06 06:25:06
$dictionary['ptg_QuickBooks']['fields']['document_name']['required']=false;
$dictionary['ptg_QuickBooks']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_QuickBooks']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_QuickBooks']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-06 06:35:10
$dictionary['ptg_QuickBooks']['fields']['username_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['username_c']['labelValue']='Username';

 

 // created: 2020-06-06 06:34:51
$dictionary['ptg_QuickBooks']['fields']['admin_login_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['admin_login_c']['labelValue']='Admin Login';

 

 // created: 2020-06-06 06:25:16
$dictionary['ptg_QuickBooks']['fields']['active_date']['required']=false;
$dictionary['ptg_QuickBooks']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_QuickBooks']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_QuickBooks']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-06 06:35:27
$dictionary['ptg_QuickBooks']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-06 06:35:45
$dictionary['ptg_QuickBooks']['fields']['confirm_password__c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['confirm_password__c']['labelValue']='Confirm password';

 

 // created: 2020-06-06 06:38:21
$dictionary['ptg_QuickBooks']['fields']['approval_not_needed_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['approval_not_needed_c']['labelValue']='Approval not needed';

 

 // created: 2020-06-06 06:34:10
$dictionary['ptg_QuickBooks']['fields']['license_type_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['license_type_c']['labelValue']='License type';

 

 // created: 2020-06-06 06:36:30
$dictionary['ptg_QuickBooks']['fields']['approval_requester_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['approval_requester_c']['labelValue']='Approval requester';

 

 // created: 2020-06-06 06:30:22
$dictionary['ptg_QuickBooks']['fields']['product_type_c']['inline_edit']='1';
$dictionary['ptg_QuickBooks']['fields']['product_type_c']['labelValue']='Product Type';

 
?>