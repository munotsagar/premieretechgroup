<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-15 11:36:03
$dictionary["ptg_Camera_System"]["fields"]["users_ptg_camera_system_1"] = array (
  'name' => 'users_ptg_camera_system_1',
  'type' => 'link',
  'relationship' => 'users_ptg_camera_system_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_CAMERA_SYSTEM_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_camera_system_1users_ida',
);
$dictionary["ptg_Camera_System"]["fields"]["users_ptg_camera_system_1_name"] = array (
  'name' => 'users_ptg_camera_system_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_CAMERA_SYSTEM_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_camera_system_1users_ida',
  'link' => 'users_ptg_camera_system_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Camera_System"]["fields"]["users_ptg_camera_system_1users_ida"] = array (
  'name' => 'users_ptg_camera_system_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_camera_system_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_CAMERA_SYSTEM_1_FROM_PTG_CAMERA_SYSTEM_TITLE',
);


// created: 2020-06-15 11:32:09
$dictionary["ptg_Camera_System"]["fields"]["accounts_ptg_camera_system_1"] = array (
  'name' => 'accounts_ptg_camera_system_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_camera_system_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_CAMERA_SYSTEM_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_camera_system_1accounts_ida',
);
$dictionary["ptg_Camera_System"]["fields"]["accounts_ptg_camera_system_1_name"] = array (
  'name' => 'accounts_ptg_camera_system_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_CAMERA_SYSTEM_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_camera_system_1accounts_ida',
  'link' => 'accounts_ptg_camera_system_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Camera_System"]["fields"]["accounts_ptg_camera_system_1accounts_ida"] = array (
  'name' => 'accounts_ptg_camera_system_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_camera_system_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_CAMERA_SYSTEM_1_FROM_PTG_CAMERA_SYSTEM_TITLE',
);


 // created: 2020-06-15 11:21:30
$dictionary['ptg_Camera_System']['fields']['address_or_ip_address_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['address_or_ip_address_c']['labelValue']='Address or IP Address';

 

 // created: 2020-06-15 11:28:13
$dictionary['ptg_Camera_System']['fields']['document_name']['required']=false;
$dictionary['ptg_Camera_System']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_Camera_System']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_Camera_System']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-15 11:28:25
$dictionary['ptg_Camera_System']['fields']['active_date']['required']=false;
$dictionary['ptg_Camera_System']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_Camera_System']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_Camera_System']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-20 15:30:58
$dictionary['ptg_Camera_System']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-15 11:21:55
$dictionary['ptg_Camera_System']['fields']['port_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['port_c']['labelValue']='Port';

 

 // created: 2020-06-15 11:19:04
$dictionary['ptg_Camera_System']['fields']['alias_or_location_name_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['alias_or_location_name_c']['labelValue']='Alias or Location Name';

 

 // created: 2020-06-20 15:29:55
$dictionary['ptg_Camera_System']['fields']['system_manufacture_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['system_manufacture_c']['labelValue']='System Manufacture';

 

 // created: 2020-06-15 11:20:59
$dictionary['ptg_Camera_System']['fields']['register_mode_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['register_mode_c']['labelValue']='Register Mode';

 

 // created: 2020-06-20 15:30:43
$dictionary['ptg_Camera_System']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-20 15:30:30
$dictionary['ptg_Camera_System']['fields']['admin_user_name_c']['inline_edit']='1';
$dictionary['ptg_Camera_System']['fields']['admin_user_name_c']['labelValue']='Admin User Name';

 
?>