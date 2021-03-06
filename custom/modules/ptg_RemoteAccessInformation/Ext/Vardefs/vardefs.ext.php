<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-07 10:23:52
$dictionary["ptg_RemoteAccessInformation"]["fields"]["users_ptg_remoteaccessinformation_1"] = array (
  'name' => 'users_ptg_remoteaccessinformation_1',
  'type' => 'link',
  'relationship' => 'users_ptg_remoteaccessinformation_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_REMOTEACCESSINFORMATION_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_remoteaccessinformation_1users_ida',
);
$dictionary["ptg_RemoteAccessInformation"]["fields"]["users_ptg_remoteaccessinformation_1_name"] = array (
  'name' => 'users_ptg_remoteaccessinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_REMOTEACCESSINFORMATION_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_remoteaccessinformation_1users_ida',
  'link' => 'users_ptg_remoteaccessinformation_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_RemoteAccessInformation"]["fields"]["users_ptg_remoteaccessinformation_1users_ida"] = array (
  'name' => 'users_ptg_remoteaccessinformation_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_remoteaccessinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_REMOTEACCESSINFORMATION_1_FROM_PTG_REMOTEACCESSINFORMATION_TITLE',
);


// created: 2020-06-06 11:29:55
$dictionary["ptg_RemoteAccessInformation"]["fields"]["accounts_ptg_remoteaccessinformation_1"] = array (
  'name' => 'accounts_ptg_remoteaccessinformation_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_remoteaccessinformation_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_REMOTEACCESSINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_remoteaccessinformation_1accounts_ida',
);
$dictionary["ptg_RemoteAccessInformation"]["fields"]["accounts_ptg_remoteaccessinformation_1_name"] = array (
  'name' => 'accounts_ptg_remoteaccessinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_REMOTEACCESSINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_remoteaccessinformation_1accounts_ida',
  'link' => 'accounts_ptg_remoteaccessinformation_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_RemoteAccessInformation"]["fields"]["accounts_ptg_remoteaccessinformation_1accounts_ida"] = array (
  'name' => 'accounts_ptg_remoteaccessinformation_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_remoteaccessinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_REMOTEACCESSINFORMATION_1_FROM_PTG_REMOTEACCESSINFORMATION_TITLE',
);


 // created: 2020-06-05 18:36:40
$dictionary['ptg_RemoteAccessInformation']['fields']['document_name']['required']=false;
$dictionary['ptg_RemoteAccessInformation']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_RemoteAccessInformation']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_RemoteAccessInformation']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 18:39:38
$dictionary['ptg_RemoteAccessInformation']['fields']['port_forwarding_number_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['port_forwarding_number_c']['labelValue']='Port Forwarding Number';

 

 // created: 2020-06-05 18:39:56
$dictionary['ptg_RemoteAccessInformation']['fields']['vpn_client_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['vpn_client_c']['labelValue']='VPN Client';

 

 // created: 2020-06-05 18:38:23
$dictionary['ptg_RemoteAccessInformation']['fields']['user_name_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['user_name_c']['labelValue']='User Name';

 

 // created: 2020-06-05 18:36:48
$dictionary['ptg_RemoteAccessInformation']['fields']['active_date']['required']=false;
$dictionary['ptg_RemoteAccessInformation']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_RemoteAccessInformation']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_RemoteAccessInformation']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 18:38:39
$dictionary['ptg_RemoteAccessInformation']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 18:40:25
$dictionary['ptg_RemoteAccessInformation']['fields']['external_link_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['external_link_c']['labelValue']='External Link';

 

 // created: 2020-06-05 18:37:44
$dictionary['ptg_RemoteAccessInformation']['fields']['rdp_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['rdp_c']['labelValue']='RDP (IP / URL)';

 

 // created: 2020-06-05 18:37:19
$dictionary['ptg_RemoteAccessInformation']['fields']['vpn_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['vpn_c']['labelValue']='VPN (IP / URL)';

 

 // created: 2020-06-05 18:39:02
$dictionary['ptg_RemoteAccessInformation']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_RemoteAccessInformation']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-08 07:05:43
$dictionary['ptg_RemoteAccessInformation']['fields']['description']['inline_edit']=true;
$dictionary['ptg_RemoteAccessInformation']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_RemoteAccessInformation']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_RemoteAccessInformation']['fields']['description']['merge_filter']='disabled';

 
?>