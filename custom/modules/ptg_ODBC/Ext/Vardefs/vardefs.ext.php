<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:30:28
$dictionary["ptg_ODBC"]["fields"]["accounts_ptg_odbc_1"] = array (
  'name' => 'accounts_ptg_odbc_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_odbc_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_ODBC_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_odbc_1accounts_ida',
);
$dictionary["ptg_ODBC"]["fields"]["accounts_ptg_odbc_1_name"] = array (
  'name' => 'accounts_ptg_odbc_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_ODBC_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_odbc_1accounts_ida',
  'link' => 'accounts_ptg_odbc_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_ODBC"]["fields"]["accounts_ptg_odbc_1accounts_ida"] = array (
  'name' => 'accounts_ptg_odbc_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_odbc_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_ODBC_1_FROM_PTG_ODBC_TITLE',
);


// created: 2020-06-07 09:34:29
$dictionary["ptg_ODBC"]["fields"]["users_ptg_odbc_1"] = array (
  'name' => 'users_ptg_odbc_1',
  'type' => 'link',
  'relationship' => 'users_ptg_odbc_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_ODBC_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_odbc_1users_ida',
);
$dictionary["ptg_ODBC"]["fields"]["users_ptg_odbc_1_name"] = array (
  'name' => 'users_ptg_odbc_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_ODBC_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_odbc_1users_ida',
  'link' => 'users_ptg_odbc_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_ODBC"]["fields"]["users_ptg_odbc_1users_ida"] = array (
  'name' => 'users_ptg_odbc_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_odbc_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_ODBC_1_FROM_PTG_ODBC_TITLE',
);


 // created: 2020-06-05 18:45:45
$dictionary['ptg_ODBC']['fields']['document_name']['required']=false;
$dictionary['ptg_ODBC']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_ODBC']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_ODBC']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 18:46:20
$dictionary['ptg_ODBC']['fields']['odbc_connection_c']['inline_edit']='1';
$dictionary['ptg_ODBC']['fields']['odbc_connection_c']['labelValue']='ODBC Connection';

 

 // created: 2020-06-05 18:45:55
$dictionary['ptg_ODBC']['fields']['active_date']['required']=false;
$dictionary['ptg_ODBC']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_ODBC']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_ODBC']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-08 07:07:42
$dictionary['ptg_ODBC']['fields']['description']['inline_edit']=true;
$dictionary['ptg_ODBC']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_ODBC']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_ODBC']['fields']['description']['merge_filter']='disabled';

 
?>