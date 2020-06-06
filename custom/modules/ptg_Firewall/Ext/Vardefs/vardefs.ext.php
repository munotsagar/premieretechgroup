<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 10:07:08
$dictionary["ptg_Firewall"]["fields"]["accounts_ptg_firewall_1"] = array (
  'name' => 'accounts_ptg_firewall_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_firewall_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_FIREWALL_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_firewall_1accounts_ida',
);
$dictionary["ptg_Firewall"]["fields"]["accounts_ptg_firewall_1_name"] = array (
  'name' => 'accounts_ptg_firewall_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_FIREWALL_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_firewall_1accounts_ida',
  'link' => 'accounts_ptg_firewall_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Firewall"]["fields"]["accounts_ptg_firewall_1accounts_ida"] = array (
  'name' => 'accounts_ptg_firewall_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_firewall_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_FIREWALL_1_FROM_PTG_FIREWALL_TITLE',
);


 // created: 2020-06-05 07:48:02
$dictionary['ptg_Firewall']['fields']['firmware_version_c']['inline_edit']='1';
$dictionary['ptg_Firewall']['fields']['firmware_version_c']['labelValue']='Firmware version';

 

 // created: 2020-06-05 07:54:18
$dictionary['ptg_Firewall']['fields']['username_c']['inline_edit']='1';
$dictionary['ptg_Firewall']['fields']['username_c']['labelValue']='Username';

 

 // created: 2020-06-05 07:54:06
$dictionary['ptg_Firewall']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_Firewall']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 09:50:24
$dictionary['ptg_Firewall']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_Firewall']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-05 07:47:35
$dictionary['ptg_Firewall']['fields']['model_c']['inline_edit']='1';
$dictionary['ptg_Firewall']['fields']['model_c']['labelValue']='Model';

 

 // created: 2020-06-05 07:51:11
$dictionary['ptg_Firewall']['fields']['ip_address_c']['inline_edit']='1';
$dictionary['ptg_Firewall']['fields']['ip_address_c']['labelValue']='IP Address';

 
?>