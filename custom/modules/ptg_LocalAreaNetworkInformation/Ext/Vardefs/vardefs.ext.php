<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:24:13
$dictionary["ptg_LocalAreaNetworkInformation"]["fields"]["accounts_ptg_localareanetworkinformation_1"] = array (
  'name' => 'accounts_ptg_localareanetworkinformation_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_localareanetworkinformation_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_LOCALAREANETWORKINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_localareanetworkinformation_1accounts_ida',
);
$dictionary["ptg_LocalAreaNetworkInformation"]["fields"]["accounts_ptg_localareanetworkinformation_1_name"] = array (
  'name' => 'accounts_ptg_localareanetworkinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_LOCALAREANETWORKINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_localareanetworkinformation_1accounts_ida',
  'link' => 'accounts_ptg_localareanetworkinformation_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_LocalAreaNetworkInformation"]["fields"]["accounts_ptg_localareanetworkinformation_1accounts_ida"] = array (
  'name' => 'accounts_ptg_localareanetworkinformation_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_localareanetworkinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_LOCALAREANETWORKINFORMATION_1_FROM_PTG_LOCALAREANETWORKINFORMATION_TITLE',
);


// created: 2020-06-07 10:17:06
$dictionary["ptg_LocalAreaNetworkInformation"]["fields"]["users_ptg_localareanetworkinformation_1"] = array (
  'name' => 'users_ptg_localareanetworkinformation_1',
  'type' => 'link',
  'relationship' => 'users_ptg_localareanetworkinformation_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_LOCALAREANETWORKINFORMATION_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_localareanetworkinformation_1users_ida',
);
$dictionary["ptg_LocalAreaNetworkInformation"]["fields"]["users_ptg_localareanetworkinformation_1_name"] = array (
  'name' => 'users_ptg_localareanetworkinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_LOCALAREANETWORKINFORMATION_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_localareanetworkinformation_1users_ida',
  'link' => 'users_ptg_localareanetworkinformation_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_LocalAreaNetworkInformation"]["fields"]["users_ptg_localareanetworkinformation_1users_ida"] = array (
  'name' => 'users_ptg_localareanetworkinformation_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_localareanetworkinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_LOCALAREANETWORKINFORMATION_1_FROM_PTG_LOCALAREANETWORKINFORMATION_TITLE',
);


 // created: 2020-06-05 16:56:55
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['domain_server_login_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['domain_server_login_c']['labelValue']='Domain Server Login';

 

 // created: 2020-06-05 16:57:25
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['document_name']['required']=false;
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 16:50:23
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['gateway_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['gateway_c']['labelValue']='GateWay';

 

 // created: 2020-06-05 16:55:49
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['secondary_domain_controller_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['secondary_domain_controller_c']['labelValue']='Secondary Domain Controller';

 

 // created: 2020-06-05 16:54:39
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['client_hostname_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['client_hostname_c']['labelValue']='Client HostName';

 

 // created: 2020-06-05 16:51:10
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['dns_servers_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['dns_servers_c']['labelValue']='DNS Servers';

 

 // created: 2020-06-05 16:56:36
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['domain_server_password_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['domain_server_password_c']['labelValue']='Domain Server Password';

 

 // created: 2020-06-05 16:57:58
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['active_date']['required']=false;
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 16:50:49
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['subnet_mask_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['subnet_mask_c']['labelValue']='Subnet Mask';

 

 // created: 2020-06-05 16:51:57
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['domain_server_name_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['domain_server_name_c']['labelValue']='Domain Server Name';

 

 // created: 2020-06-05 16:55:28
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['primary_domain_controller_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['primary_domain_controller_c']['labelValue']='Primary Domain Controller';

 

 // created: 2020-06-05 16:53:22
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-08 06:47:55
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['description']['inline_edit']=true;
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-05 16:49:50
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['external_ip_address_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['external_ip_address_c']['labelValue']='External IP Address';

 

 // created: 2020-06-05 16:53:50
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['windows_domain_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['windows_domain_c']['labelValue']='Windows Domain';

 

 // created: 2020-06-05 16:49:26
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['local_ip_range_c']['inline_edit']='1';
$dictionary['ptg_LocalAreaNetworkInformation']['fields']['local_ip_range_c']['labelValue']='Local IP Range';

 
?>