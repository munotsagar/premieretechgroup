<?php
// created: 2020-07-18 20:52:18
$subpanel_layout['list_fields'] = array (
  'version_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VERSION',
    'width' => '10%',
  ),
  'username_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_USERNAME',
    'width' => '10%',
  ),
  'desktop_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DESKTOP',
    'width' => '10%',
  ),
  'location_of_software_install_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LOCATION_OF_SOFTWARE_INSTALL',
    'width' => '10%',
  ),
  'license_keys_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LICENSE_KEYS',
    'width' => '10%',
  ),
  'ok_to_upgrade_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_OK_TO_UPGRADE',
    'width' => '10%',
  ),
  'approval_requester_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_APPROVAL_REQUESTER',
    'width' => '10%',
  ),
  'approval_not_needed_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_APPROVAL_NOT_NEEDED',
    'width' => '10%',
  ),
  'admin_login_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADMIN_LOGIN',
    'width' => '10%',
  ),
  'password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PASSWORD',
    'width' => '10%',
  ),
  'confirm_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CONFIRM_PASSWORD',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ptg_OtherLicensedSoftwareDesktop',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_OtherLicensedSoftwareDesktop',
    'width' => '5%',
    'default' => true,
  ),
);