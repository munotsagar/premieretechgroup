<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-08 17:37:28
$dictionary["ptg_SharepointOnPremise"]["fields"]["accounts_ptg_sharepointonpremise_1"] = array (
  'name' => 'accounts_ptg_sharepointonpremise_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sharepointonpremise_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINTONPREMISE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_sharepointonpremise_1accounts_ida',
);
$dictionary["ptg_SharepointOnPremise"]["fields"]["accounts_ptg_sharepointonpremise_1_name"] = array (
  'name' => 'accounts_ptg_sharepointonpremise_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINTONPREMISE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_sharepointonpremise_1accounts_ida',
  'link' => 'accounts_ptg_sharepointonpremise_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_SharepointOnPremise"]["fields"]["accounts_ptg_sharepointonpremise_1accounts_ida"] = array (
  'name' => 'accounts_ptg_sharepointonpremise_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sharepointonpremise_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINTONPREMISE_1_FROM_PTG_SHAREPOINTONPREMISE_TITLE',
);


// created: 2020-06-08 17:51:27
$dictionary["ptg_SharepointOnPremise"]["fields"]["users_ptg_sharepointonpremise_1"] = array (
  'name' => 'users_ptg_sharepointonpremise_1',
  'type' => 'link',
  'relationship' => 'users_ptg_sharepointonpremise_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_SHAREPOINTONPREMISE_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_sharepointonpremise_1users_ida',
);
$dictionary["ptg_SharepointOnPremise"]["fields"]["users_ptg_sharepointonpremise_1_name"] = array (
  'name' => 'users_ptg_sharepointonpremise_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_SHAREPOINTONPREMISE_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_sharepointonpremise_1users_ida',
  'link' => 'users_ptg_sharepointonpremise_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_SharepointOnPremise"]["fields"]["users_ptg_sharepointonpremise_1users_ida"] = array (
  'name' => 'users_ptg_sharepointonpremise_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_sharepointonpremise_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_SHAREPOINTONPREMISE_1_FROM_PTG_SHAREPOINTONPREMISE_TITLE',
);


 // created: 2020-06-08 17:24:28
$dictionary['ptg_SharepointOnPremise']['fields']['document_name']['required']=false;
$dictionary['ptg_SharepointOnPremise']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_SharepointOnPremise']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_SharepointOnPremise']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-08 17:23:15
$dictionary['ptg_SharepointOnPremise']['fields']['sharepoint_url_c']['inline_edit']='1';
$dictionary['ptg_SharepointOnPremise']['fields']['sharepoint_url_c']['labelValue']='SharePoint URL';

 

 // created: 2020-06-08 17:24:43
$dictionary['ptg_SharepointOnPremise']['fields']['active_date']['required']=false;
$dictionary['ptg_SharepointOnPremise']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_SharepointOnPremise']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_SharepointOnPremise']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-08 17:24:16
$dictionary['ptg_SharepointOnPremise']['fields']['description']['inline_edit']=true;
$dictionary['ptg_SharepointOnPremise']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_SharepointOnPremise']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_SharepointOnPremise']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-08 17:23:46
$dictionary['ptg_SharepointOnPremise']['fields']['main_team_site_url_c']['inline_edit']='1';
$dictionary['ptg_SharepointOnPremise']['fields']['main_team_site_url_c']['labelValue']='Main team site URL';

 
?>