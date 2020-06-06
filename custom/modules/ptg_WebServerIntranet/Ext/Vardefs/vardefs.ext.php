<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:28:19
$dictionary["ptg_WebServerIntranet"]["fields"]["accounts_ptg_webserverintranet_1"] = array (
  'name' => 'accounts_ptg_webserverintranet_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_webserverintranet_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_WEBSERVERINTRANET_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_webserverintranet_1accounts_ida',
);
$dictionary["ptg_WebServerIntranet"]["fields"]["accounts_ptg_webserverintranet_1_name"] = array (
  'name' => 'accounts_ptg_webserverintranet_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_WEBSERVERINTRANET_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_webserverintranet_1accounts_ida',
  'link' => 'accounts_ptg_webserverintranet_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_WebServerIntranet"]["fields"]["accounts_ptg_webserverintranet_1accounts_ida"] = array (
  'name' => 'accounts_ptg_webserverintranet_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_webserverintranet_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_WEBSERVERINTRANET_1_FROM_PTG_WEBSERVERINTRANET_TITLE',
);


 // created: 2020-06-05 17:44:59
$dictionary['ptg_WebServerIntranet']['fields']['document_name']['required']=false;
$dictionary['ptg_WebServerIntranet']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_WebServerIntranet']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_WebServerIntranet']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 17:50:56
$dictionary['ptg_WebServerIntranet']['fields']['server_c']['inline_edit']='1';
$dictionary['ptg_WebServerIntranet']['fields']['server_c']['labelValue']='Server';

 

 // created: 2020-06-05 17:50:25
$dictionary['ptg_WebServerIntranet']['fields']['login_c']['inline_edit']='1';
$dictionary['ptg_WebServerIntranet']['fields']['login_c']['labelValue']='Login';

 

 // created: 2020-06-05 17:46:25
$dictionary['ptg_WebServerIntranet']['fields']['url_c']['inline_edit']='1';
$dictionary['ptg_WebServerIntranet']['fields']['url_c']['labelValue']='URL';

 

 // created: 2020-06-05 17:49:47
$dictionary['ptg_WebServerIntranet']['fields']['active_date']['required']=false;
$dictionary['ptg_WebServerIntranet']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_WebServerIntranet']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_WebServerIntranet']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 17:50:08
$dictionary['ptg_WebServerIntranet']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_WebServerIntranet']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 17:49:56
$dictionary['ptg_WebServerIntranet']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_WebServerIntranet']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 
?>