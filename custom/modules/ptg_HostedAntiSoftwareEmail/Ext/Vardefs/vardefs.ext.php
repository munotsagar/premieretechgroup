<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-08 17:53:09
$dictionary["ptg_HostedAntiSoftwareEmail"]["fields"]["users_ptg_hostedantisoftwareemail_1"] = array (
  'name' => 'users_ptg_hostedantisoftwareemail_1',
  'type' => 'link',
  'relationship' => 'users_ptg_hostedantisoftwareemail_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_HOSTEDANTISOFTWAREEMAIL_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_hostedantisoftwareemail_1users_ida',
);
$dictionary["ptg_HostedAntiSoftwareEmail"]["fields"]["users_ptg_hostedantisoftwareemail_1_name"] = array (
  'name' => 'users_ptg_hostedantisoftwareemail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_HOSTEDANTISOFTWAREEMAIL_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_hostedantisoftwareemail_1users_ida',
  'link' => 'users_ptg_hostedantisoftwareemail_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_HostedAntiSoftwareEmail"]["fields"]["users_ptg_hostedantisoftwareemail_1users_ida"] = array (
  'name' => 'users_ptg_hostedantisoftwareemail_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_hostedantisoftwareemail_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_HOSTEDANTISOFTWAREEMAIL_1_FROM_PTG_HOSTEDANTISOFTWAREEMAIL_TITLE',
);


// created: 2020-06-08 17:38:11
$dictionary["ptg_HostedAntiSoftwareEmail"]["fields"]["accounts_ptg_hostedantisoftwareemail_1"] = array (
  'name' => 'accounts_ptg_hostedantisoftwareemail_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_hostedantisoftwareemail_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTEDANTISOFTWAREEMAIL_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_hostedantisoftwareemail_1accounts_ida',
);
$dictionary["ptg_HostedAntiSoftwareEmail"]["fields"]["accounts_ptg_hostedantisoftwareemail_1_name"] = array (
  'name' => 'accounts_ptg_hostedantisoftwareemail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTEDANTISOFTWAREEMAIL_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_hostedantisoftwareemail_1accounts_ida',
  'link' => 'accounts_ptg_hostedantisoftwareemail_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_HostedAntiSoftwareEmail"]["fields"]["accounts_ptg_hostedantisoftwareemail_1accounts_ida"] = array (
  'name' => 'accounts_ptg_hostedantisoftwareemail_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_hostedantisoftwareemail_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_HOSTEDANTISOFTWAREEMAIL_1_FROM_PTG_HOSTEDANTISOFTWAREEMAIL_TITLE',
);


 // created: 2020-06-20 13:32:23
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['login_password_c']['inline_edit']='1';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['login_password_c']['labelValue']='Login Password';

 

 // created: 2020-06-08 15:09:23
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['document_name']['required']=false;
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-20 13:32:33
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['user_login_name_c']['inline_edit']='1';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['user_login_name_c']['labelValue']='User Login Name';

 

 // created: 2020-06-08 15:14:28
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['services_provided_c']['inline_edit']='1';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['services_provided_c']['labelValue']='Services Provided';

 

 // created: 2020-06-08 15:09:13
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['active_date']['required']=false;
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-20 13:32:49
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['confirm_password_c']['labelValue']='Confirm Password';

 

 // created: 2020-06-08 15:04:27
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['description']['inline_edit']=true;
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_HostedAntiSoftwareEmail']['fields']['description']['merge_filter']='disabled';

 
?>