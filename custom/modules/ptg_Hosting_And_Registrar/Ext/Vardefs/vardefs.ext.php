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


 // created: 2020-06-05 14:14:50
$dictionary['ptg_Hosting_And_Registrar']['fields']['name_servers_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['name_servers_c']['labelValue']='Name Servers';

 

 // created: 2020-06-05 14:12:18
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_login_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_login_c']['labelValue']='Registrar Login';

 

 // created: 2020-06-05 14:12:40
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_password_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['registrar_password_c']['labelValue']='Registrar Password';

 

 // created: 2020-06-05 14:13:27
$dictionary['ptg_Hosting_And_Registrar']['fields']['domain_name_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['domain_name_c']['labelValue']='Domain Name';

 

 // created: 2020-06-05 14:11:47
$dictionary['ptg_Hosting_And_Registrar']['fields']['web_host_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['web_host_c']['labelValue']='Web Host';

 

 // created: 2020-06-05 14:13:03
$dictionary['ptg_Hosting_And_Registrar']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_Hosting_And_Registrar']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-05 14:19:55
$dictionary['ptg_Hosting_And_Registrar']['fields']['name']['required']=false;
$dictionary['ptg_Hosting_And_Registrar']['fields']['name']['inline_edit']=true;
$dictionary['ptg_Hosting_And_Registrar']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ptg_Hosting_And_Registrar']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['ptg_Hosting_And_Registrar']['fields']['name']['merge_filter']='disabled';
$dictionary['ptg_Hosting_And_Registrar']['fields']['name']['unified_search']=false;

 
?>