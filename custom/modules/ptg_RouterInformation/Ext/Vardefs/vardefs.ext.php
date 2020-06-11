<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-07 10:18:13
$dictionary["ptg_RouterInformation"]["fields"]["users_ptg_routerinformation_1"] = array (
  'name' => 'users_ptg_routerinformation_1',
  'type' => 'link',
  'relationship' => 'users_ptg_routerinformation_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_ROUTERINFORMATION_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_routerinformation_1users_ida',
);
$dictionary["ptg_RouterInformation"]["fields"]["users_ptg_routerinformation_1_name"] = array (
  'name' => 'users_ptg_routerinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_ROUTERINFORMATION_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_routerinformation_1users_ida',
  'link' => 'users_ptg_routerinformation_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_RouterInformation"]["fields"]["users_ptg_routerinformation_1users_ida"] = array (
  'name' => 'users_ptg_routerinformation_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_routerinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_ROUTERINFORMATION_1_FROM_PTG_ROUTERINFORMATION_TITLE',
);


// created: 2020-06-06 11:25:16
$dictionary["ptg_RouterInformation"]["fields"]["accounts_ptg_routerinformation_1"] = array (
  'name' => 'accounts_ptg_routerinformation_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_routerinformation_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_ROUTERINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_routerinformation_1accounts_ida',
);
$dictionary["ptg_RouterInformation"]["fields"]["accounts_ptg_routerinformation_1_name"] = array (
  'name' => 'accounts_ptg_routerinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_ROUTERINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_routerinformation_1accounts_ida',
  'link' => 'accounts_ptg_routerinformation_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_RouterInformation"]["fields"]["accounts_ptg_routerinformation_1accounts_ida"] = array (
  'name' => 'accounts_ptg_routerinformation_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_routerinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_ROUTERINFORMATION_1_FROM_PTG_ROUTERINFORMATION_TITLE',
);


 // created: 2020-06-05 17:11:09
$dictionary['ptg_RouterInformation']['fields']['document_name']['required']=false;
$dictionary['ptg_RouterInformation']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_RouterInformation']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_RouterInformation']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 17:16:01
$dictionary['ptg_RouterInformation']['fields']['nat_c']['inline_edit']='1';
$dictionary['ptg_RouterInformation']['fields']['nat_c']['labelValue']='NAT (On /OFF)';

 

 // created: 2020-06-05 17:19:00
$dictionary['ptg_RouterInformation']['fields']['dhcp_c']['inline_edit']='1';
$dictionary['ptg_RouterInformation']['fields']['dhcp_c']['labelValue']='DHCP (On /OFF)';

 

 // created: 2020-06-05 17:12:05
$dictionary['ptg_RouterInformation']['fields']['router_ip_url_c']['inline_edit']='1';
$dictionary['ptg_RouterInformation']['fields']['router_ip_url_c']['labelValue']='Router IP / URL';

 

 // created: 2020-06-05 17:11:19
$dictionary['ptg_RouterInformation']['fields']['active_date']['required']=false;
$dictionary['ptg_RouterInformation']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_RouterInformation']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_RouterInformation']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 17:19:23
$dictionary['ptg_RouterInformation']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_RouterInformation']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-05 17:20:05
$dictionary['ptg_RouterInformation']['fields']['router_login_c']['inline_edit']='1';
$dictionary['ptg_RouterInformation']['fields']['router_login_c']['labelValue']='Router Login';

 

 // created: 2020-06-05 17:19:11
$dictionary['ptg_RouterInformation']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_RouterInformation']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-08 06:54:38
$dictionary['ptg_RouterInformation']['fields']['description']['inline_edit']=true;
$dictionary['ptg_RouterInformation']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_RouterInformation']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_RouterInformation']['fields']['description']['merge_filter']='disabled';

 
?>