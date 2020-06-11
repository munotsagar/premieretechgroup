<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:34:11
$dictionary["ptg_OtherLicensedSoftware"]["fields"]["accounts_ptg_otherlicensedsoftware_1"] = array (
  'name' => 'accounts_ptg_otherlicensedsoftware_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_otherlicensedsoftware_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERLICENSEDSOFTWARE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_otherlicensedsoftware_1accounts_ida',
);
$dictionary["ptg_OtherLicensedSoftware"]["fields"]["accounts_ptg_otherlicensedsoftware_1_name"] = array (
  'name' => 'accounts_ptg_otherlicensedsoftware_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERLICENSEDSOFTWARE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_otherlicensedsoftware_1accounts_ida',
  'link' => 'accounts_ptg_otherlicensedsoftware_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_OtherLicensedSoftware"]["fields"]["accounts_ptg_otherlicensedsoftware_1accounts_ida"] = array (
  'name' => 'accounts_ptg_otherlicensedsoftware_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_otherlicensedsoftware_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERLICENSEDSOFTWARE_1_FROM_PTG_OTHERLICENSEDSOFTWARE_TITLE',
);


// created: 2020-06-07 10:29:38
$dictionary["ptg_OtherLicensedSoftware"]["fields"]["users_ptg_otherlicensedsoftware_1"] = array (
  'name' => 'users_ptg_otherlicensedsoftware_1',
  'type' => 'link',
  'relationship' => 'users_ptg_otherlicensedsoftware_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_OTHERLICENSEDSOFTWARE_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_otherlicensedsoftware_1users_ida',
);
$dictionary["ptg_OtherLicensedSoftware"]["fields"]["users_ptg_otherlicensedsoftware_1_name"] = array (
  'name' => 'users_ptg_otherlicensedsoftware_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_OTHERLICENSEDSOFTWARE_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_otherlicensedsoftware_1users_ida',
  'link' => 'users_ptg_otherlicensedsoftware_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_OtherLicensedSoftware"]["fields"]["users_ptg_otherlicensedsoftware_1users_ida"] = array (
  'name' => 'users_ptg_otherlicensedsoftware_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_otherlicensedsoftware_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_OTHERLICENSEDSOFTWARE_1_FROM_PTG_OTHERLICENSEDSOFTWARE_TITLE',
);


 // created: 2020-06-06 07:01:06
$dictionary['ptg_OtherLicensedSoftware']['fields']['version_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['version_c']['labelValue']='Version';

 

 // created: 2020-06-06 07:00:41
$dictionary['ptg_OtherLicensedSoftware']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_OtherLicensedSoftware']['fields']['document_name']['help']='Application Name ';
$dictionary['ptg_OtherLicensedSoftware']['fields']['document_name']['comments']='Application Name ';
$dictionary['ptg_OtherLicensedSoftware']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_OtherLicensedSoftware']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-06 07:03:44
$dictionary['ptg_OtherLicensedSoftware']['fields']['location_of_software_install_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['location_of_software_install_c']['labelValue']='Location of software/installation files ';

 

 // created: 2020-06-06 07:05:11
$dictionary['ptg_OtherLicensedSoftware']['fields']['username_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['username_c']['labelValue']='Username';

 

 // created: 2020-06-06 07:04:24
$dictionary['ptg_OtherLicensedSoftware']['fields']['license_keys_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['license_keys_c']['labelValue']='License keys (if needed for installation) ';

 

 // created: 2020-06-06 07:02:02
$dictionary['ptg_OtherLicensedSoftware']['fields']['ok_to_upgrade_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['ok_to_upgrade_c']['labelValue']='OK to upgrade';

 

 // created: 2020-06-06 07:04:47
$dictionary['ptg_OtherLicensedSoftware']['fields']['admin_login_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['admin_login_c']['labelValue']='Admin Login';

 

 // created: 2020-06-06 07:07:36
$dictionary['ptg_OtherLicensedSoftware']['fields']['active_date']['required']=false;
$dictionary['ptg_OtherLicensedSoftware']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_OtherLicensedSoftware']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_OtherLicensedSoftware']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-06 07:05:40
$dictionary['ptg_OtherLicensedSoftware']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-06 07:05:57
$dictionary['ptg_OtherLicensedSoftware']['fields']['confirm_password__c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['confirm_password__c']['labelValue']='Confirm password';

 

 // created: 2020-06-06 06:59:07
$dictionary['ptg_OtherLicensedSoftware']['fields']['weblink_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['weblink_c']['labelValue']='Weblink';

 

 // created: 2020-06-06 07:06:59
$dictionary['ptg_OtherLicensedSoftware']['fields']['approval_not_needed_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['approval_not_needed_c']['labelValue']='Approval not needed';

 

 // created: 2020-06-06 07:06:13
$dictionary['ptg_OtherLicensedSoftware']['fields']['approval_requester_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['approval_requester_c']['labelValue']='Approval requester';

 

 // created: 2020-06-08 07:37:46
$dictionary['ptg_OtherLicensedSoftware']['fields']['additional_notes_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftware']['fields']['additional_notes_c']['labelValue']='Additional Notes';

 

 // created: 2020-06-08 07:41:05
$dictionary['ptg_OtherLicensedSoftware']['fields']['description']['inline_edit']=true;
$dictionary['ptg_OtherLicensedSoftware']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_OtherLicensedSoftware']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_OtherLicensedSoftware']['fields']['description']['merge_filter']='disabled';

 
?>