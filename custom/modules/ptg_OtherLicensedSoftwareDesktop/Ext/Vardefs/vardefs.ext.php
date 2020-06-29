<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-08 17:48:14
$dictionary["ptg_OtherLicensedSoftwareDesktop"]["fields"]["users_ptg_otherlicensedsoftwaredesktop_1"] = array (
  'name' => 'users_ptg_otherlicensedsoftwaredesktop_1',
  'type' => 'link',
  'relationship' => 'users_ptg_otherlicensedsoftwaredesktop_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_OTHERLICENSEDSOFTWAREDESKTOP_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_otherlicensedsoftwaredesktop_1users_ida',
);
$dictionary["ptg_OtherLicensedSoftwareDesktop"]["fields"]["users_ptg_otherlicensedsoftwaredesktop_1_name"] = array (
  'name' => 'users_ptg_otherlicensedsoftwaredesktop_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_OTHERLICENSEDSOFTWAREDESKTOP_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_otherlicensedsoftwaredesktop_1users_ida',
  'link' => 'users_ptg_otherlicensedsoftwaredesktop_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_OtherLicensedSoftwareDesktop"]["fields"]["users_ptg_otherlicensedsoftwaredesktop_1users_ida"] = array (
  'name' => 'users_ptg_otherlicensedsoftwaredesktop_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_otherlicensedsoftwaredesktop_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_OTHERLICENSEDSOFTWAREDESKTOP_1_FROM_PTG_OTHERLICENSEDSOFTWAREDESKTOP_TITLE',
);


// created: 2020-06-08 17:36:47
$dictionary["ptg_OtherLicensedSoftwareDesktop"]["fields"]["accounts_ptg_otherlicensedsoftwaredesktop_1"] = array (
  'name' => 'accounts_ptg_otherlicensedsoftwaredesktop_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_otherlicensedsoftwaredesktop_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERLICENSEDSOFTWAREDESKTOP_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_otherlicensedsoftwaredesktop_1accounts_ida',
);
$dictionary["ptg_OtherLicensedSoftwareDesktop"]["fields"]["accounts_ptg_otherlicensedsoftwaredesktop_1_name"] = array (
  'name' => 'accounts_ptg_otherlicensedsoftwaredesktop_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERLICENSEDSOFTWAREDESKTOP_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_otherlicensedsoftwaredesktop_1accounts_ida',
  'link' => 'accounts_ptg_otherlicensedsoftwaredesktop_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_OtherLicensedSoftwareDesktop"]["fields"]["accounts_ptg_otherlicensedsoftwaredesktop_1accounts_ida"] = array (
  'name' => 'accounts_ptg_otherlicensedsoftwaredesktop_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_otherlicensedsoftwaredesktop_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERLICENSEDSOFTWAREDESKTOP_1_FROM_PTG_OTHERLICENSEDSOFTWAREDESKTOP_TITLE',
);


 // created: 2020-06-08 17:19:05
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['version_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['version_c']['labelValue']='Version';

 

 // created: 2020-06-08 17:08:53
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['document_name']['required']=true;

 

 // created: 2020-06-08 17:10:31
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['location_of_software_install_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['location_of_software_install_c']['labelValue']='Location of software/installation files';

 

 // created: 2020-06-20 15:18:24
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['username_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['username_c']['labelValue']='Username';

 

 // created: 2020-06-08 17:10:55
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['license_keys_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['license_keys_c']['labelValue']='License keys (if needed for installation)';

 

 // created: 2020-06-08 17:09:43
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['ok_to_upgrade_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['ok_to_upgrade_c']['labelValue']='OK to upgrade';

 

 // created: 2020-06-20 15:18:09
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['admin_login_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['admin_login_c']['labelValue']='Admin Login';

 

 // created: 2020-06-08 17:14:29
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['active_date']['required']=false;
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-20 15:17:38
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['password_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['password_c']['labelValue']='Password';

 

 // created: 2020-06-08 17:13:24
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['approval_not_needed_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['approval_not_needed_c']['labelValue']='Approval not needed';

 

 // created: 2020-06-20 15:17:52
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['confirm_password_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['confirm_password_c']['labelValue']='Confirm password';

 

 // created: 2020-06-08 17:12:52
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['approval_requester_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['approval_requester_c']['labelValue']='Approval requester';

 

 // created: 2020-06-08 17:13:50
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['description']['inline_edit']=true;
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['description']['help']='Additional Notes';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['description']['comments']='Additional Notes';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-08 17:07:13
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['desktop_c']['inline_edit']='1';
$dictionary['ptg_OtherLicensedSoftwareDesktop']['fields']['desktop_c']['labelValue']='Desktop';

 
?>