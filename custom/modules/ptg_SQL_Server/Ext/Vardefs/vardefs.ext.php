<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:32:18
$dictionary["ptg_SQL_Server"]["fields"]["accounts_ptg_sql_server_1"] = array (
  'name' => 'accounts_ptg_sql_server_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sql_server_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_SQL_SERVER_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_sql_server_1accounts_ida',
);
$dictionary["ptg_SQL_Server"]["fields"]["accounts_ptg_sql_server_1_name"] = array (
  'name' => 'accounts_ptg_sql_server_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_SQL_SERVER_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_sql_server_1accounts_ida',
  'link' => 'accounts_ptg_sql_server_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_SQL_Server"]["fields"]["accounts_ptg_sql_server_1accounts_ida"] = array (
  'name' => 'accounts_ptg_sql_server_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sql_server_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_SQL_SERVER_1_FROM_PTG_SQL_SERVER_TITLE',
);


 // created: 2020-06-05 18:57:04
$dictionary['ptg_SQL_Server']['fields']['document_name']['required']=false;
$dictionary['ptg_SQL_Server']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_SQL_Server']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_SQL_Server']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 18:57:54
$dictionary['ptg_SQL_Server']['fields']['server_c']['inline_edit']='1';
$dictionary['ptg_SQL_Server']['fields']['server_c']['labelValue']='Server';

 

 // created: 2020-06-05 18:58:35
$dictionary['ptg_SQL_Server']['fields']['login_c']['inline_edit']='1';
$dictionary['ptg_SQL_Server']['fields']['login_c']['labelValue']='Login';

 

 // created: 2020-06-05 18:57:27
$dictionary['ptg_SQL_Server']['fields']['active_date']['required']=false;
$dictionary['ptg_SQL_Server']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_SQL_Server']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_SQL_Server']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 19:15:33
$dictionary['ptg_SQL_Server']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_SQL_Server']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 18:59:23
$dictionary['ptg_SQL_Server']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_SQL_Server']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 18:58:13
$dictionary['ptg_SQL_Server']['fields']['ip_address_c']['inline_edit']='1';
$dictionary['ptg_SQL_Server']['fields']['ip_address_c']['labelValue']='IP Address';

 
?>