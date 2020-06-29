<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:18:46
$dictionary["ptg_Network_Drives"]["fields"]["accounts_ptg_network_drives_1"] = array (
  'name' => 'accounts_ptg_network_drives_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_network_drives_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_NETWORK_DRIVES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_network_drives_1accounts_ida',
);
$dictionary["ptg_Network_Drives"]["fields"]["accounts_ptg_network_drives_1_name"] = array (
  'name' => 'accounts_ptg_network_drives_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_NETWORK_DRIVES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_network_drives_1accounts_ida',
  'link' => 'accounts_ptg_network_drives_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Network_Drives"]["fields"]["accounts_ptg_network_drives_1accounts_ida"] = array (
  'name' => 'accounts_ptg_network_drives_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_network_drives_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_NETWORK_DRIVES_1_FROM_PTG_NETWORK_DRIVES_TITLE',
);


// created: 2020-06-07 10:04:09
$dictionary["ptg_Network_Drives"]["fields"]["users_ptg_network_drives_1"] = array (
  'name' => 'users_ptg_network_drives_1',
  'type' => 'link',
  'relationship' => 'users_ptg_network_drives_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_NETWORK_DRIVES_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_network_drives_1users_ida',
);
$dictionary["ptg_Network_Drives"]["fields"]["users_ptg_network_drives_1_name"] = array (
  'name' => 'users_ptg_network_drives_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_NETWORK_DRIVES_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_network_drives_1users_ida',
  'link' => 'users_ptg_network_drives_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Network_Drives"]["fields"]["users_ptg_network_drives_1users_ida"] = array (
  'name' => 'users_ptg_network_drives_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_network_drives_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_NETWORK_DRIVES_1_FROM_PTG_NETWORK_DRIVES_TITLE',
);


 // created: 2020-06-20 13:26:26
$dictionary['ptg_Network_Drives']['fields']['path_c']['inline_edit']='1';
$dictionary['ptg_Network_Drives']['fields']['path_c']['labelValue']='Path';

 

 // created: 2020-06-20 13:26:16
$dictionary['ptg_Network_Drives']['fields']['name']['required']=true;
$dictionary['ptg_Network_Drives']['fields']['name']['inline_edit']=true;
$dictionary['ptg_Network_Drives']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ptg_Network_Drives']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['ptg_Network_Drives']['fields']['name']['merge_filter']='disabled';
$dictionary['ptg_Network_Drives']['fields']['name']['unified_search']=false;

 
?>