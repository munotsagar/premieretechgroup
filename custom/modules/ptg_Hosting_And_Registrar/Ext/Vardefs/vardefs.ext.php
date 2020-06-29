<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:22:52
$dictionary["ptg_Hosting_And_Registrar"]["fields"]["accounts_ptg_hosting_and_registrar_1"] = array (
  'name' => 'accounts_ptg_hosting_and_registrar_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_hosting_and_registrar_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTING_AND_REGISTRAR_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_hosting_and_registrar_1accounts_ida',
);
$dictionary["ptg_Hosting_And_Registrar"]["fields"]["accounts_ptg_hosting_and_registrar_1_name"] = array (
  'name' => 'accounts_ptg_hosting_and_registrar_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTING_AND_REGISTRAR_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_hosting_and_registrar_1accounts_ida',
  'link' => 'accounts_ptg_hosting_and_registrar_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Hosting_And_Registrar"]["fields"]["accounts_ptg_hosting_and_registrar_1accounts_ida"] = array (
  'name' => 'accounts_ptg_hosting_and_registrar_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_hosting_and_registrar_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTING_AND_REGISTRAR_1_FROM_PTG_HOSTING_AND_REGISTRAR_TITLE',
);


// created: 2020-06-07 10:14:57
$dictionary["ptg_Hosting_And_Registrar"]["fields"]["users_ptg_hosting_and_registrar_1"] = array (
  'name' => 'users_ptg_hosting_and_registrar_1',
  'type' => 'link',
  'relationship' => 'users_ptg_hosting_and_registrar_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_HOSTING_AND_REGISTRAR_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_hosting_and_registrar_1users_ida',
);
$dictionary["ptg_Hosting_And_Registrar"]["fields"]["users_ptg_hosting_and_registrar_1_name"] = array (
  'name' => 'users_ptg_hosting_and_registrar_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_HOSTING_AND_REGISTRAR_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_hosting_and_registrar_1users_ida',
  'link' => 'users_ptg_hosting_and_registrar_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Hosting_And_Registrar"]["fields"]["users_ptg_hosting_and_registrar_1users_ida"] = array (
  'name' => 'users_ptg_hosting_and_registrar_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_hosting_and_registrar_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_HOSTING_AND_REGISTRAR_1_FROM_PTG_HOSTING_AND_REGISTRAR_TITLE',
);


 // created: 2020-06-05 14:14:50
$dictionary['ptg_Hosting_And_Registrar']['fields']['name_servers_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['name_servers_c']['labelValue']='Name Servers';

 

 // created: 2020-06-20 13:40:03
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_login_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_login_c']['labelValue']='Registrar Login';

 

 // created: 2020-06-20 13:39:51
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_password_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_password_c']['labelValue']='Registrar Password';

 

 // created: 2020-06-05 14:13:27
$dictionary['ptg_Hosting_And_Registrar']['fields']['domain_name_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['domain_name_c']['labelValue']='Domain Name';

 

 // created: 2020-06-05 14:11:47
$dictionary['ptg_Hosting_And_Registrar']['fields']['web_host_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['web_host_c']['labelValue']='Web Host';

 

 // created: 2020-06-20 13:39:37
$dictionary['ptg_Hosting_And_Registrar']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-08 06:44:19
$dictionary['ptg_Hosting_And_Registrar']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Hosting_And_Registrar']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Hosting_And_Registrar']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Hosting_And_Registrar']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-20 13:40:21
$dictionary['ptg_Hosting_And_Registrar']['fields']['name']['required']=true;

 
?>