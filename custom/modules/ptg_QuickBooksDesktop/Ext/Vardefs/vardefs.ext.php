<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-08 17:35:53
$dictionary["ptg_QuickBooksDesktop"]["fields"]["accounts_ptg_quickbooksdesktop_1"] = array (
  'name' => 'accounts_ptg_quickbooksdesktop_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_quickbooksdesktop_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_QUICKBOOKSDESKTOP_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_quickbooksdesktop_1accounts_ida',
);
$dictionary["ptg_QuickBooksDesktop"]["fields"]["accounts_ptg_quickbooksdesktop_1_name"] = array (
  'name' => 'accounts_ptg_quickbooksdesktop_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_QUICKBOOKSDESKTOP_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_quickbooksdesktop_1accounts_ida',
  'link' => 'accounts_ptg_quickbooksdesktop_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_QuickBooksDesktop"]["fields"]["accounts_ptg_quickbooksdesktop_1accounts_ida"] = array (
  'name' => 'accounts_ptg_quickbooksdesktop_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_quickbooksdesktop_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_QUICKBOOKSDESKTOP_1_FROM_PTG_QUICKBOOKSDESKTOP_TITLE',
);


// created: 2020-06-08 17:46:56
$dictionary["ptg_QuickBooksDesktop"]["fields"]["users_ptg_quickbooksdesktop_1"] = array (
  'name' => 'users_ptg_quickbooksdesktop_1',
  'type' => 'link',
  'relationship' => 'users_ptg_quickbooksdesktop_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_QUICKBOOKSDESKTOP_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_quickbooksdesktop_1users_ida',
);
$dictionary["ptg_QuickBooksDesktop"]["fields"]["users_ptg_quickbooksdesktop_1_name"] = array (
  'name' => 'users_ptg_quickbooksdesktop_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_QUICKBOOKSDESKTOP_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_quickbooksdesktop_1users_ida',
  'link' => 'users_ptg_quickbooksdesktop_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_QuickBooksDesktop"]["fields"]["users_ptg_quickbooksdesktop_1users_ida"] = array (
  'name' => 'users_ptg_quickbooksdesktop_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_quickbooksdesktop_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_QUICKBOOKSDESKTOP_1_FROM_PTG_QUICKBOOKSDESKTOP_TITLE',
);


 // created: 2020-06-08 16:58:13
$dictionary['ptg_QuickBooksDesktop']['fields']['document_name']['required']=false;
$dictionary['ptg_QuickBooksDesktop']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_QuickBooksDesktop']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_QuickBooksDesktop']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-08 16:55:05
$dictionary['ptg_QuickBooksDesktop']['fields']['username_c']['inline_edit']='1';
$dictionary['ptg_QuickBooksDesktop']['fields']['username_c']['labelValue']='Username';

 

 // created: 2020-06-08 16:54:47
$dictionary['ptg_QuickBooksDesktop']['fields']['admin_login_c']['inline_edit']='1';
$dictionary['ptg_QuickBooksDesktop']['fields']['admin_login_c']['labelValue']='Admin Login';

 

 // created: 2020-06-08 16:58:01
$dictionary['ptg_QuickBooksDesktop']['fields']['active_date']['required']=false;
$dictionary['ptg_QuickBooksDesktop']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_QuickBooksDesktop']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_QuickBooksDesktop']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-08 16:55:30
$dictionary['ptg_QuickBooksDesktop']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_QuickBooksDesktop']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-08 16:57:00
$dictionary['ptg_QuickBooksDesktop']['fields']['approval_not_needed_c']['inline_edit']='1';
$dictionary['ptg_QuickBooksDesktop']['fields']['approval_not_needed_c']['labelValue']='Approval not needed';

 

 // created: 2020-06-08 16:54:21
$dictionary['ptg_QuickBooksDesktop']['fields']['license_type_c']['inline_edit']='1';
$dictionary['ptg_QuickBooksDesktop']['fields']['license_type_c']['labelValue']='License Type';

 

 // created: 2020-06-08 16:56:02
$dictionary['ptg_QuickBooksDesktop']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_QuickBooksDesktop']['fields']['confirm_password_c']['labelValue']='Confirm password';

 

 // created: 2020-06-08 16:56:33
$dictionary['ptg_QuickBooksDesktop']['fields']['approval_requester_c']['inline_edit']='1';
$dictionary['ptg_QuickBooksDesktop']['fields']['approval_requester_c']['labelValue']='Approval requester';

 

 // created: 2020-06-08 16:57:30
$dictionary['ptg_QuickBooksDesktop']['fields']['description']['inline_edit']=true;
$dictionary['ptg_QuickBooksDesktop']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_QuickBooksDesktop']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_QuickBooksDesktop']['fields']['description']['merge_filter']='disabled';

 
?>