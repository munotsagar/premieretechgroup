<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:23:22
$dictionary["ptg_ActiveDirectory"]["fields"]["accounts_ptg_activedirectory_1"] = array (
  'name' => 'accounts_ptg_activedirectory_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_activedirectory_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_ACTIVEDIRECTORY_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_activedirectory_1accounts_ida',
);
$dictionary["ptg_ActiveDirectory"]["fields"]["accounts_ptg_activedirectory_1_name"] = array (
  'name' => 'accounts_ptg_activedirectory_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_ACTIVEDIRECTORY_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_activedirectory_1accounts_ida',
  'link' => 'accounts_ptg_activedirectory_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_ActiveDirectory"]["fields"]["accounts_ptg_activedirectory_1accounts_ida"] = array (
  'name' => 'accounts_ptg_activedirectory_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_activedirectory_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_ACTIVEDIRECTORY_1_FROM_PTG_ACTIVEDIRECTORY_TITLE',
);


// created: 2020-06-07 10:16:03
$dictionary["ptg_ActiveDirectory"]["fields"]["users_ptg_activedirectory_1"] = array (
  'name' => 'users_ptg_activedirectory_1',
  'type' => 'link',
  'relationship' => 'users_ptg_activedirectory_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_ACTIVEDIRECTORY_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_activedirectory_1users_ida',
);
$dictionary["ptg_ActiveDirectory"]["fields"]["users_ptg_activedirectory_1_name"] = array (
  'name' => 'users_ptg_activedirectory_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_ACTIVEDIRECTORY_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_activedirectory_1users_ida',
  'link' => 'users_ptg_activedirectory_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_ActiveDirectory"]["fields"]["users_ptg_activedirectory_1users_ida"] = array (
  'name' => 'users_ptg_activedirectory_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_activedirectory_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_ACTIVEDIRECTORY_1_FROM_PTG_ACTIVEDIRECTORY_TITLE',
);


 // created: 2020-06-05 16:45:46
$dictionary['ptg_ActiveDirectory']['fields']['document_name']['required']=false;
$dictionary['ptg_ActiveDirectory']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_ActiveDirectory']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_ActiveDirectory']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-25 09:30:50
$dictionary['ptg_ActiveDirectory']['fields']['ou_template1_c']['inline_edit']='1';
$dictionary['ptg_ActiveDirectory']['fields']['ou_template1_c']['labelValue']='ou template1';

 

 // created: 2020-06-05 16:43:39
$dictionary['ptg_ActiveDirectory']['fields']['ou_template_c']['inline_edit']='1';
$dictionary['ptg_ActiveDirectory']['fields']['ou_template_c']['labelValue']='OU / Template';

 

 // created: 2020-06-05 16:45:57
$dictionary['ptg_ActiveDirectory']['fields']['active_date']['required']=false;
$dictionary['ptg_ActiveDirectory']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_ActiveDirectory']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_ActiveDirectory']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-28 05:23:28
$dictionary['ptg_ActiveDirectory']['fields']['please_upload_c']['inline_edit']='1';
$dictionary['ptg_ActiveDirectory']['fields']['please_upload_c']['labelValue']='Please Upload';

 

 // created: 2020-06-08 06:45:57
$dictionary['ptg_ActiveDirectory']['fields']['description']['inline_edit']=true;
$dictionary['ptg_ActiveDirectory']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_ActiveDirectory']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_ActiveDirectory']['fields']['description']['merge_filter']='disabled';

 
?>