<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:29:12
$dictionary["ptg_CitrixServers"]["fields"]["accounts_ptg_citrixservers_1"] = array (
  'name' => 'accounts_ptg_citrixservers_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_citrixservers_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_CITRIXSERVERS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_citrixservers_1accounts_ida',
);
$dictionary["ptg_CitrixServers"]["fields"]["accounts_ptg_citrixservers_1_name"] = array (
  'name' => 'accounts_ptg_citrixservers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_CITRIXSERVERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_citrixservers_1accounts_ida',
  'link' => 'accounts_ptg_citrixservers_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_CitrixServers"]["fields"]["accounts_ptg_citrixservers_1accounts_ida"] = array (
  'name' => 'accounts_ptg_citrixservers_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_citrixservers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_CITRIXSERVERS_1_FROM_PTG_CITRIXSERVERS_TITLE',
);


// created: 2020-06-07 10:22:46
$dictionary["ptg_CitrixServers"]["fields"]["users_ptg_citrixservers_1"] = array (
  'name' => 'users_ptg_citrixservers_1',
  'type' => 'link',
  'relationship' => 'users_ptg_citrixservers_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_CITRIXSERVERS_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_citrixservers_1users_ida',
);
$dictionary["ptg_CitrixServers"]["fields"]["users_ptg_citrixservers_1_name"] = array (
  'name' => 'users_ptg_citrixservers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_CITRIXSERVERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_citrixservers_1users_ida',
  'link' => 'users_ptg_citrixservers_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_CitrixServers"]["fields"]["users_ptg_citrixservers_1users_ida"] = array (
  'name' => 'users_ptg_citrixservers_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_citrixservers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_CITRIXSERVERS_1_FROM_PTG_CITRIXSERVERS_TITLE',
);


 // created: 2020-06-05 18:29:09
$dictionary['ptg_CitrixServers']['fields']['document_name']['required']=false;
$dictionary['ptg_CitrixServers']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_CitrixServers']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_CitrixServers']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 18:27:33
$dictionary['ptg_CitrixServers']['fields']['farm_name_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['farm_name_c']['labelValue']='Farm Name';

 

 // created: 2020-06-05 18:25:27
$dictionary['ptg_CitrixServers']['fields']['server_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['server_c']['labelValue']='Server';

 

 // created: 2020-06-05 18:28:23
$dictionary['ptg_CitrixServers']['fields']['url_thin_client_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['url_thin_client_c']['labelValue']='URL for thin client access';

 

 // created: 2020-06-05 18:26:16
$dictionary['ptg_CitrixServers']['fields']['login_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['login_c']['labelValue']='Login';

 

 // created: 2020-06-05 18:28:55
$dictionary['ptg_CitrixServers']['fields']['active_date']['required']=false;
$dictionary['ptg_CitrixServers']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_CitrixServers']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_CitrixServers']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 18:26:39
$dictionary['ptg_CitrixServers']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 18:23:44
$dictionary['ptg_CitrixServers']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-20 13:49:42
$dictionary['ptg_CitrixServers']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 18:24:51
$dictionary['ptg_CitrixServers']['fields']['vpn_ip_address_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['vpn_ip_address_c']['labelValue']='VPN IP Address';

 

 // created: 2020-06-08 07:03:59
$dictionary['ptg_CitrixServers']['fields']['description']['inline_edit']=true;
$dictionary['ptg_CitrixServers']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_CitrixServers']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_CitrixServers']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-20 13:48:27
$dictionary['ptg_CitrixServers']['fields']['citrix_server_type_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['citrix_server_type_c']['labelValue']='Type';

 

 // created: 2020-06-05 18:24:22
$dictionary['ptg_CitrixServers']['fields']['ip_address_c']['inline_edit']='1';
$dictionary['ptg_CitrixServers']['fields']['ip_address_c']['labelValue']='IP Address';

 
?>