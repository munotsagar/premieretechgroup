<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:30:58
$dictionary["ptg_Resources"]["fields"]["accounts_ptg_resources_1"] = array (
  'name' => 'accounts_ptg_resources_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_resources_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_RESOURCES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_resources_1accounts_ida',
);
$dictionary["ptg_Resources"]["fields"]["accounts_ptg_resources_1_name"] = array (
  'name' => 'accounts_ptg_resources_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_RESOURCES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_resources_1accounts_ida',
  'link' => 'accounts_ptg_resources_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Resources"]["fields"]["accounts_ptg_resources_1accounts_ida"] = array (
  'name' => 'accounts_ptg_resources_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_resources_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_RESOURCES_1_FROM_PTG_RESOURCES_TITLE',
);


// created: 2020-06-07 10:24:53
$dictionary["ptg_Resources"]["fields"]["users_ptg_resources_1"] = array (
  'name' => 'users_ptg_resources_1',
  'type' => 'link',
  'relationship' => 'users_ptg_resources_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_RESOURCES_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_resources_1users_ida',
);
$dictionary["ptg_Resources"]["fields"]["users_ptg_resources_1_name"] = array (
  'name' => 'users_ptg_resources_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_RESOURCES_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_resources_1users_ida',
  'link' => 'users_ptg_resources_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Resources"]["fields"]["users_ptg_resources_1users_ida"] = array (
  'name' => 'users_ptg_resources_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_resources_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_RESOURCES_1_FROM_PTG_RESOURCES_TITLE',
);


 // created: 2020-06-05 18:53:02
$dictionary['ptg_Resources']['fields']['document_name']['required']=false;
$dictionary['ptg_Resources']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_Resources']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_Resources']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-05 18:52:02
$dictionary['ptg_Resources']['fields']['resource_directory_c']['inline_edit']='1';
$dictionary['ptg_Resources']['fields']['resource_directory_c']['labelValue']='Resource Server/Apps Directory Software';

 

 // created: 2020-06-05 18:52:48
$dictionary['ptg_Resources']['fields']['location_c']['inline_edit']='1';
$dictionary['ptg_Resources']['fields']['location_c']['labelValue']='Location';

 

 // created: 2020-06-05 18:53:17
$dictionary['ptg_Resources']['fields']['active_date']['required']=false;
$dictionary['ptg_Resources']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_Resources']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_Resources']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-08 07:26:53
$dictionary['ptg_Resources']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Resources']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_Resources']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_Resources']['fields']['description']['merge_filter']='disabled';

 
?>