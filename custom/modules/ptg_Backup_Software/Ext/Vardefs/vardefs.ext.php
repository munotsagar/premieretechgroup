<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:17:14
$dictionary["ptg_Backup_Software"]["fields"]["accounts_ptg_backup_software_1"] = array (
  'name' => 'accounts_ptg_backup_software_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_backup_software_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_BACKUP_SOFTWARE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_backup_software_1accounts_ida',
);
$dictionary["ptg_Backup_Software"]["fields"]["accounts_ptg_backup_software_1_name"] = array (
  'name' => 'accounts_ptg_backup_software_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_BACKUP_SOFTWARE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_backup_software_1accounts_ida',
  'link' => 'accounts_ptg_backup_software_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Backup_Software"]["fields"]["accounts_ptg_backup_software_1accounts_ida"] = array (
  'name' => 'accounts_ptg_backup_software_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_backup_software_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_BACKUP_SOFTWARE_1_FROM_PTG_BACKUP_SOFTWARE_TITLE',
);


 // created: 2020-06-05 09:52:21
$dictionary['ptg_Backup_Software']['fields']['server_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['server_c']['labelValue']='Server';

 

 // created: 2020-06-05 09:54:47
$dictionary['ptg_Backup_Software']['fields']['login_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['login_c']['labelValue']='Login';

 

 // created: 2020-06-05 09:55:08
$dictionary['ptg_Backup_Software']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 09:52:52
$dictionary['ptg_Backup_Software']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-05 09:55:31
$dictionary['ptg_Backup_Software']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 09:53:31
$dictionary['ptg_Backup_Software']['fields']['vpn_ip_address_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['vpn_ip_address_c']['labelValue']='VPN IP Address';

 

 // created: 2020-06-05 09:57:40
$dictionary['ptg_Backup_Software']['fields']['name']['required']=false;
$dictionary['ptg_Backup_Software']['fields']['name']['inline_edit']=true;
$dictionary['ptg_Backup_Software']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ptg_Backup_Software']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['ptg_Backup_Software']['fields']['name']['merge_filter']='disabled';
$dictionary['ptg_Backup_Software']['fields']['name']['unified_search']=false;

 

 // created: 2020-06-05 09:53:56
$dictionary['ptg_Backup_Software']['fields']['ip_address_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['ip_address_c']['labelValue']='IP Address';

 
?>