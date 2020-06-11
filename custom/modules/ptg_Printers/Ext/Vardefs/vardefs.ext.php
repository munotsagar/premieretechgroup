<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-07 10:02:58
$dictionary["ptg_Printers"]["fields"]["users_ptg_printers_1"] = array (
  'name' => 'users_ptg_printers_1',
  'type' => 'link',
  'relationship' => 'users_ptg_printers_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_PRINTERS_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_printers_1users_ida',
);
$dictionary["ptg_Printers"]["fields"]["users_ptg_printers_1_name"] = array (
  'name' => 'users_ptg_printers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_PRINTERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_printers_1users_ida',
  'link' => 'users_ptg_printers_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Printers"]["fields"]["users_ptg_printers_1users_ida"] = array (
  'name' => 'users_ptg_printers_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_printers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_PRINTERS_1_FROM_PTG_PRINTERS_TITLE',
);


// created: 2020-06-06 11:17:58
$dictionary["ptg_Printers"]["fields"]["accounts_ptg_printers_1"] = array (
  'name' => 'accounts_ptg_printers_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_printers_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_PRINTERS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_printers_1accounts_ida',
);
$dictionary["ptg_Printers"]["fields"]["accounts_ptg_printers_1_name"] = array (
  'name' => 'accounts_ptg_printers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_PRINTERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_printers_1accounts_ida',
  'link' => 'accounts_ptg_printers_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Printers"]["fields"]["accounts_ptg_printers_1accounts_ida"] = array (
  'name' => 'accounts_ptg_printers_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_printers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_PRINTERS_1_FROM_PTG_PRINTERS_TITLE',
);


 // created: 2020-06-05 10:04:45
$dictionary['ptg_Printers']['fields']['printer_model_c']['inline_edit']='1';
$dictionary['ptg_Printers']['fields']['printer_model_c']['labelValue']='Printer Model';

 

 // created: 2020-06-05 10:05:25
$dictionary['ptg_Printers']['fields']['physical_location_c']['inline_edit']='1';
$dictionary['ptg_Printers']['fields']['physical_location_c']['labelValue']='Physical Location';

 

 // created: 2020-06-05 10:05:57
$dictionary['ptg_Printers']['fields']['admin_password_c']['inline_edit']='1';
$dictionary['ptg_Printers']['fields']['admin_password_c']['labelValue']='Admin Password';

 

 // created: 2020-06-05 10:03:32
$dictionary['ptg_Printers']['fields']['printer_type_network_local_c']['inline_edit']='1';
$dictionary['ptg_Printers']['fields']['printer_type_network_local_c']['labelValue']='Printer Type Network or Local';

 

 // created: 2020-06-05 10:06:16
$dictionary['ptg_Printers']['fields']['scan_path_c']['inline_edit']='1';
$dictionary['ptg_Printers']['fields']['scan_path_c']['labelValue']='Scan path';

 

 // created: 2020-06-08 05:43:55
$dictionary['ptg_Printers']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Printers']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Printers']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Printers']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-05 10:04:22
$dictionary['ptg_Printers']['fields']['name']['required']=false;

 

 // created: 2020-06-05 10:05:06
$dictionary['ptg_Printers']['fields']['ip_address_c']['inline_edit']='1';
$dictionary['ptg_Printers']['fields']['ip_address_c']['labelValue']='IP Address';

 

 // created: 2020-06-05 10:05:40
$dictionary['ptg_Printers']['fields']['admin_username_c']['inline_edit']='1';
$dictionary['ptg_Printers']['fields']['admin_username_c']['labelValue']='Admin Username';

 
?>