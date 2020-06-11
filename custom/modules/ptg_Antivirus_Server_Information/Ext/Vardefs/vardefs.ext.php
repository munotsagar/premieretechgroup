<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-07 09:28:14
$dictionary["ptg_Antivirus_Server_Information"]["fields"]["users_ptg_antivirus_server_information_1"] = array (
  'name' => 'users_ptg_antivirus_server_information_1',
  'type' => 'link',
  'relationship' => 'users_ptg_antivirus_server_information_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_ANTIVIRUS_SERVER_INFORMATION_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_antivirus_server_information_1users_ida',
);
$dictionary["ptg_Antivirus_Server_Information"]["fields"]["users_ptg_antivirus_server_information_1_name"] = array (
  'name' => 'users_ptg_antivirus_server_information_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_ANTIVIRUS_SERVER_INFORMATION_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_antivirus_server_information_1users_ida',
  'link' => 'users_ptg_antivirus_server_information_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Antivirus_Server_Information"]["fields"]["users_ptg_antivirus_server_information_1users_ida"] = array (
  'name' => 'users_ptg_antivirus_server_information_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_antivirus_server_information_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_ANTIVIRUS_SERVER_INFORMATION_1_FROM_PTG_ANTIVIRUS_SERVER_INFORMATION_TITLE',
);


// created: 2020-06-06 10:03:04
$dictionary["ptg_Antivirus_Server_Information"]["fields"]["accounts_ptg_antivirus_server_information_1"] = array (
  'name' => 'accounts_ptg_antivirus_server_information_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_antivirus_server_information_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_ANTIVIRUS_SERVER_INFORMATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_antivirus_server_information_1accounts_ida',
);
$dictionary["ptg_Antivirus_Server_Information"]["fields"]["accounts_ptg_antivirus_server_information_1_name"] = array (
  'name' => 'accounts_ptg_antivirus_server_information_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_ANTIVIRUS_SERVER_INFORMATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_antivirus_server_information_1accounts_ida',
  'link' => 'accounts_ptg_antivirus_server_information_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Antivirus_Server_Information"]["fields"]["accounts_ptg_antivirus_server_information_1accounts_ida"] = array (
  'name' => 'accounts_ptg_antivirus_server_information_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_antivirus_server_information_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_ANTIVIRUS_SERVER_INFORMATION_1_FROM_PTG_ANTIVIRUS_SERVER_INFORMATION_TITLE',
);


 // created: 2020-06-05 09:45:29
$dictionary['ptg_Antivirus_Server_Information']['fields']['login_password_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['login_password_c']['labelValue']='Login Password';

 

 // created: 2020-06-05 09:44:01
$dictionary['ptg_Antivirus_Server_Information']['fields']['productofantivirusname_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['productofantivirusname_c']['labelValue']='Product of Antivirus Name';

 

 // created: 2020-06-05 07:15:07
$dictionary['ptg_Antivirus_Server_Information']['fields']['server_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['server_c']['labelValue']='Server';

 

 // created: 2020-06-05 07:27:40
$dictionary['ptg_Antivirus_Server_Information']['fields']['login_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['login_c']['labelValue']='Login';

 

 // created: 2020-06-05 09:45:01
$dictionary['ptg_Antivirus_Server_Information']['fields']['user_login_name_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['user_login_name_c']['labelValue']='User Login Name';

 

 // created: 2020-06-05 09:43:12
$dictionary['ptg_Antivirus_Server_Information']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-05 09:45:53
$dictionary['ptg_Antivirus_Server_Information']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 09:44:39
$dictionary['ptg_Antivirus_Server_Information']['fields']['vpn_ip_address_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['vpn_ip_address_c']['labelValue']='VPN IP Address';

 

 // created: 2020-06-08 05:38:10
$dictionary['ptg_Antivirus_Server_Information']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Antivirus_Server_Information']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Antivirus_Server_Information']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Antivirus_Server_Information']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-05 09:48:04
$dictionary['ptg_Antivirus_Server_Information']['fields']['name']['required']=false;
$dictionary['ptg_Antivirus_Server_Information']['fields']['name']['inline_edit']=true;
$dictionary['ptg_Antivirus_Server_Information']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ptg_Antivirus_Server_Information']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['ptg_Antivirus_Server_Information']['fields']['name']['merge_filter']='disabled';
$dictionary['ptg_Antivirus_Server_Information']['fields']['name']['unified_search']=false;

 

 // created: 2020-06-05 09:44:19
$dictionary['ptg_Antivirus_Server_Information']['fields']['ip_address_c']['inline_edit']='1';
$dictionary['ptg_Antivirus_Server_Information']['fields']['ip_address_c']['labelValue']='IP Address';

 
?>