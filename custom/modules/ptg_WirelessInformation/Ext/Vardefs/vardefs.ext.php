<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:27:30
$dictionary["ptg_WirelessInformation"]["fields"]["accounts_ptg_wirelessinformation_1"] = array (
  'name' => 'accounts_ptg_wirelessinformation_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_wirelessinformation_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_WIRELESSINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_wirelessinformation_1accounts_ida',
);
$dictionary["ptg_WirelessInformation"]["fields"]["accounts_ptg_wirelessinformation_1_name"] = array (
  'name' => 'accounts_ptg_wirelessinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_WIRELESSINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_wirelessinformation_1accounts_ida',
  'link' => 'accounts_ptg_wirelessinformation_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_WirelessInformation"]["fields"]["accounts_ptg_wirelessinformation_1accounts_ida"] = array (
  'name' => 'accounts_ptg_wirelessinformation_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_wirelessinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_WIRELESSINFORMATION_1_FROM_PTG_WIRELESSINFORMATION_TITLE',
);


// created: 2020-06-07 10:21:43
$dictionary["ptg_WirelessInformation"]["fields"]["users_ptg_wirelessinformation_1"] = array (
  'name' => 'users_ptg_wirelessinformation_1',
  'type' => 'link',
  'relationship' => 'users_ptg_wirelessinformation_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_WIRELESSINFORMATION_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_wirelessinformation_1users_ida',
);
$dictionary["ptg_WirelessInformation"]["fields"]["users_ptg_wirelessinformation_1_name"] = array (
  'name' => 'users_ptg_wirelessinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_WIRELESSINFORMATION_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_wirelessinformation_1users_ida',
  'link' => 'users_ptg_wirelessinformation_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_WirelessInformation"]["fields"]["users_ptg_wirelessinformation_1users_ida"] = array (
  'name' => 'users_ptg_wirelessinformation_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_wirelessinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_WIRELESSINFORMATION_1_FROM_PTG_WIRELESSINFORMATION_TITLE',
);


 // created: 2020-06-05 18:01:06
$dictionary['ptg_WirelessInformation']['fields']['ssid_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['ssid_c']['labelValue']='SSID';

 

 // created: 2020-06-05 17:54:24
$dictionary['ptg_WirelessInformation']['fields']['document_name']['required']=false;
$dictionary['ptg_WirelessInformation']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_WirelessInformation']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_WirelessInformation']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 18:01:47
$dictionary['ptg_WirelessInformation']['fields']['physical_location_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['physical_location_c']['labelValue']='Physical Location';

 

 // created: 2020-06-05 18:03:12
$dictionary['ptg_WirelessInformation']['fields']['login_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['login_c']['labelValue']='Login';

 

 // created: 2020-06-05 18:02:59
$dictionary['ptg_WirelessInformation']['fields']['wap_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['wap_c']['labelValue']='WAP (IP/URL)';

 

 // created: 2020-06-05 17:54:37
$dictionary['ptg_WirelessInformation']['fields']['active_date']['required']=false;
$dictionary['ptg_WirelessInformation']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_WirelessInformation']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_WirelessInformation']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 18:02:46
$dictionary['ptg_WirelessInformation']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-07 18:56:45
$dictionary['ptg_WirelessInformation']['fields']['type_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['type_c']['labelValue']='Type';

 

 // created: 2020-06-05 17:57:51
$dictionary['ptg_WirelessInformation']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-05 18:02:27
$dictionary['ptg_WirelessInformation']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 17:58:57
$dictionary['ptg_WirelessInformation']['fields']['vpn_ip_address_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['vpn_ip_address_c']['labelValue']='VPN IP Address';

 

 // created: 2020-06-05 18:01:22
$dictionary['ptg_WirelessInformation']['fields']['encryption_key_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['encryption_key_c']['labelValue']='Encryption Key';

 

 // created: 2020-06-08 07:01:36
$dictionary['ptg_WirelessInformation']['fields']['description']['inline_edit']=true;
$dictionary['ptg_WirelessInformation']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_WirelessInformation']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_WirelessInformation']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-05 17:58:35
$dictionary['ptg_WirelessInformation']['fields']['ip_address_c']['inline_edit']='1';
$dictionary['ptg_WirelessInformation']['fields']['ip_address_c']['labelValue']='IP Address';

 
?>