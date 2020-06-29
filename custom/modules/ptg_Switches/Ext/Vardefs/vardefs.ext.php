<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:25:57
$dictionary["ptg_Switches"]["fields"]["accounts_ptg_switches_1"] = array (
  'name' => 'accounts_ptg_switches_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_switches_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_SWITCHES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_switches_1accounts_ida',
);
$dictionary["ptg_Switches"]["fields"]["accounts_ptg_switches_1_name"] = array (
  'name' => 'accounts_ptg_switches_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_SWITCHES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_switches_1accounts_ida',
  'link' => 'accounts_ptg_switches_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Switches"]["fields"]["accounts_ptg_switches_1accounts_ida"] = array (
  'name' => 'accounts_ptg_switches_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_switches_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_SWITCHES_1_FROM_PTG_SWITCHES_TITLE',
);


// created: 2020-06-07 10:19:31
$dictionary["ptg_Switches"]["fields"]["users_ptg_switches_1"] = array (
  'name' => 'users_ptg_switches_1',
  'type' => 'link',
  'relationship' => 'users_ptg_switches_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_SWITCHES_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_switches_1users_ida',
);
$dictionary["ptg_Switches"]["fields"]["users_ptg_switches_1_name"] = array (
  'name' => 'users_ptg_switches_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_SWITCHES_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_switches_1users_ida',
  'link' => 'users_ptg_switches_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Switches"]["fields"]["users_ptg_switches_1users_ida"] = array (
  'name' => 'users_ptg_switches_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_switches_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_SWITCHES_1_FROM_PTG_SWITCHES_TITLE',
);


 // created: 2020-06-20 13:45:52
$dictionary['ptg_Switches']['fields']['ip_address__c']['inline_edit']='1';
$dictionary['ptg_Switches']['fields']['ip_address__c']['labelValue']='IP Address';

 

 // created: 2020-06-05 17:39:28
$dictionary['ptg_Switches']['fields']['document_name']['required']=false;
$dictionary['ptg_Switches']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_Switches']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_Switches']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 17:32:13
$dictionary['ptg_Switches']['fields']['switch_configured_c']['inline_edit']='1';
$dictionary['ptg_Switches']['fields']['switch_configured_c']['labelValue']='This switch is configured';

 

 // created: 2020-06-20 13:45:10
$dictionary['ptg_Switches']['fields']['switch_type_c']['inline_edit']='1';
$dictionary['ptg_Switches']['fields']['switch_type_c']['labelValue']='Switch Type';

 

 // created: 2020-06-05 17:39:15
$dictionary['ptg_Switches']['fields']['active_date']['required']=false;
$dictionary['ptg_Switches']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_Switches']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_Switches']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-05 17:36:59
$dictionary['ptg_Switches']['fields']['physical_location__c']['inline_edit']='1';
$dictionary['ptg_Switches']['fields']['physical_location__c']['labelValue']='Physical location';

 

 // created: 2020-06-20 13:45:19
$dictionary['ptg_Switches']['fields']['vendor_c']['inline_edit']='1';
$dictionary['ptg_Switches']['fields']['vendor_c']['labelValue']='Vendor';

 

 // created: 2020-06-05 17:36:33
$dictionary['ptg_Switches']['fields']['access_via_c']['inline_edit']='1';
$dictionary['ptg_Switches']['fields']['access_via_c']['labelValue']='Access via';

 

 // created: 2020-06-20 13:45:36
$dictionary['ptg_Switches']['fields']['model_c']['inline_edit']='1';
$dictionary['ptg_Switches']['fields']['model_c']['labelValue']='Model';

 

 // created: 2020-06-08 06:57:32
$dictionary['ptg_Switches']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Switches']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Switches']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Switches']['fields']['description']['merge_filter']='disabled';

 
?>