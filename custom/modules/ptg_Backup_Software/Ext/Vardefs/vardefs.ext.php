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


// created: 2020-06-07 10:01:56
$dictionary["ptg_Backup_Software"]["fields"]["users_ptg_backup_software_1"] = array (
  'name' => 'users_ptg_backup_software_1',
  'type' => 'link',
  'relationship' => 'users_ptg_backup_software_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_BACKUP_SOFTWARE_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_backup_software_1users_ida',
);
$dictionary["ptg_Backup_Software"]["fields"]["users_ptg_backup_software_1_name"] = array (
  'name' => 'users_ptg_backup_software_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_BACKUP_SOFTWARE_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_backup_software_1users_ida',
  'link' => 'users_ptg_backup_software_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Backup_Software"]["fields"]["users_ptg_backup_software_1users_ida"] = array (
  'name' => 'users_ptg_backup_software_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_backup_software_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_BACKUP_SOFTWARE_1_FROM_PTG_BACKUP_SOFTWARE_TITLE',
);


 // created: 2020-06-12 17:40:24
$dictionary['ptg_Backup_Software']['fields']['server_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['server_c']['labelValue']='Server';

 

 // created: 2020-06-12 17:40:41
$dictionary['ptg_Backup_Software']['fields']['login_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['login_c']['labelValue']='Login';

 

 // created: 2020-06-12 17:41:15
$dictionary['ptg_Backup_Software']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 09:52:52
$dictionary['ptg_Backup_Software']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-12 17:41:28
$dictionary['ptg_Backup_Software']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 09:53:31
$dictionary['ptg_Backup_Software']['fields']['vpn_ip_address_c']['inline_edit']='1';
$dictionary['ptg_Backup_Software']['fields']['vpn_ip_address_c']['labelValue']='VPN IP Address';

 

 // created: 2020-06-08 05:40:52
$dictionary['ptg_Backup_Software']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Backup_Software']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Backup_Software']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Backup_Software']['fields']['description']['merge_filter']='disabled';

 

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