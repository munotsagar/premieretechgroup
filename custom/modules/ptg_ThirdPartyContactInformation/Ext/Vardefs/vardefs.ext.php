<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-07 10:32:00
$dictionary["ptg_ThirdPartyContactInformation"]["fields"]["users_ptg_thirdpartycontactinformation_1"] = array (
  'name' => 'users_ptg_thirdpartycontactinformation_1',
  'type' => 'link',
  'relationship' => 'users_ptg_thirdpartycontactinformation_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_THIRDPARTYCONTACTINFORMATION_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_thirdpartycontactinformation_1users_ida',
);
$dictionary["ptg_ThirdPartyContactInformation"]["fields"]["users_ptg_thirdpartycontactinformation_1_name"] = array (
  'name' => 'users_ptg_thirdpartycontactinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_THIRDPARTYCONTACTINFORMATION_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_thirdpartycontactinformation_1users_ida',
  'link' => 'users_ptg_thirdpartycontactinformation_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_ThirdPartyContactInformation"]["fields"]["users_ptg_thirdpartycontactinformation_1users_ida"] = array (
  'name' => 'users_ptg_thirdpartycontactinformation_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_thirdpartycontactinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_THIRDPARTYCONTACTINFORMATION_1_FROM_PTG_THIRDPARTYCONTACTINFORMATION_TITLE',
);


// created: 2020-06-06 11:36:48
$dictionary["ptg_ThirdPartyContactInformation"]["fields"]["accounts_ptg_thirdpartycontactinformation_1"] = array (
  'name' => 'accounts_ptg_thirdpartycontactinformation_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_thirdpartycontactinformation_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_THIRDPARTYCONTACTINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_thirdpartycontactinformation_1accounts_ida',
);
$dictionary["ptg_ThirdPartyContactInformation"]["fields"]["accounts_ptg_thirdpartycontactinformation_1_name"] = array (
  'name' => 'accounts_ptg_thirdpartycontactinformation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_THIRDPARTYCONTACTINFORMATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_thirdpartycontactinformation_1accounts_ida',
  'link' => 'accounts_ptg_thirdpartycontactinformation_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_ThirdPartyContactInformation"]["fields"]["accounts_ptg_thirdpartycontactinformation_1accounts_ida"] = array (
  'name' => 'accounts_ptg_thirdpartycontactinformation_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_thirdpartycontactinformation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_THIRDPARTYCONTACTINFORMATION_1_FROM_PTG_THIRDPARTYCONTACTINFORMATION_TITLE',
);


 // created: 2020-06-06 07:33:54
$dictionary['ptg_ThirdPartyContactInformation']['fields']['phone_c']['inline_edit']='1';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['phone_c']['labelValue']='Phone';

 

 // created: 2020-06-06 07:32:33
$dictionary['ptg_ThirdPartyContactInformation']['fields']['document_name']['required']=false;
$dictionary['ptg_ThirdPartyContactInformation']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_ThirdPartyContactInformation']['fields']['document_name']['help']='Full Name';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['document_name']['comments']='Full Name';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-06 07:36:18
$dictionary['ptg_ThirdPartyContactInformation']['fields']['active_date']['required']=false;
$dictionary['ptg_ThirdPartyContactInformation']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_ThirdPartyContactInformation']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-06 07:32:59
$dictionary['ptg_ThirdPartyContactInformation']['fields']['company_c']['inline_edit']='1';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['company_c']['labelValue']='Company';

 

 // created: 2020-06-06 07:35:59
$dictionary['ptg_ThirdPartyContactInformation']['fields']['generate_url_c']['inline_edit']='1';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['generate_url_c']['labelValue']='Generate URL';

 

 // created: 2020-06-06 07:33:24
$dictionary['ptg_ThirdPartyContactInformation']['fields']['role_c']['inline_edit']='1';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['role_c']['labelValue']='Role';

 

 // created: 2020-06-08 07:46:31
$dictionary['ptg_ThirdPartyContactInformation']['fields']['description']['inline_edit']=true;
$dictionary['ptg_ThirdPartyContactInformation']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-06 07:34:31
$dictionary['ptg_ThirdPartyContactInformation']['fields']['email_c']['inline_edit']='1';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['email_c']['labelValue']='Email';

 

 // created: 2020-06-06 07:34:51
$dictionary['ptg_ThirdPartyContactInformation']['fields']['website_c']['inline_edit']='1';
$dictionary['ptg_ThirdPartyContactInformation']['fields']['website_c']['labelValue']='Website';

 
?>