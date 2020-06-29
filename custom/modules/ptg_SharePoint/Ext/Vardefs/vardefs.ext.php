<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:35:45
$dictionary["ptg_SharePoint"]["fields"]["accounts_ptg_sharepoint_1"] = array (
  'name' => 'accounts_ptg_sharepoint_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sharepoint_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINT_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_sharepoint_1accounts_ida',
);
$dictionary["ptg_SharePoint"]["fields"]["accounts_ptg_sharepoint_1_name"] = array (
  'name' => 'accounts_ptg_sharepoint_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINT_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_sharepoint_1accounts_ida',
  'link' => 'accounts_ptg_sharepoint_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_SharePoint"]["fields"]["accounts_ptg_sharepoint_1accounts_ida"] = array (
  'name' => 'accounts_ptg_sharepoint_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sharepoint_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINT_1_FROM_PTG_SHAREPOINT_TITLE',
);


// created: 2020-06-07 10:33:16
$dictionary["ptg_SharePoint"]["fields"]["users_ptg_sharepoint_1"] = array (
  'name' => 'users_ptg_sharepoint_1',
  'type' => 'link',
  'relationship' => 'users_ptg_sharepoint_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_SHAREPOINT_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_sharepoint_1users_ida',
);
$dictionary["ptg_SharePoint"]["fields"]["users_ptg_sharepoint_1_name"] = array (
  'name' => 'users_ptg_sharepoint_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_SHAREPOINT_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_sharepoint_1users_ida',
  'link' => 'users_ptg_sharepoint_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_SharePoint"]["fields"]["users_ptg_sharepoint_1users_ida"] = array (
  'name' => 'users_ptg_sharepoint_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_sharepoint_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_SHAREPOINT_1_FROM_PTG_SHAREPOINT_TITLE',
);


 // created: 2020-06-06 07:26:59
$dictionary['ptg_SharePoint']['fields']['document_name']['required']=false;
$dictionary['ptg_SharePoint']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_SharePoint']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_SharePoint']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-06 07:23:40
$dictionary['ptg_SharePoint']['fields']['environment_c']['inline_edit']='1';
$dictionary['ptg_SharePoint']['fields']['environment_c']['labelValue']='Environment';

 

 // created: 2020-06-06 07:27:11
$dictionary['ptg_SharePoint']['fields']['active_date']['required']=false;
$dictionary['ptg_SharePoint']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_SharePoint']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_SharePoint']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-20 15:21:13
$dictionary['ptg_SharePoint']['fields']['share_point_url__c']['inline_edit']='1';
$dictionary['ptg_SharePoint']['fields']['share_point_url__c']['labelValue']='Share Point URL';

 

 // created: 2020-06-08 07:44:35
$dictionary['ptg_SharePoint']['fields']['description']['inline_edit']=true;
$dictionary['ptg_SharePoint']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_SharePoint']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_SharePoint']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-20 15:21:05
$dictionary['ptg_SharePoint']['fields']['main_team_site_url_c']['inline_edit']='1';
$dictionary['ptg_SharePoint']['fields']['main_team_site_url_c']['labelValue']='Main team site URL';

 
?>