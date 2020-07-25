<?php
// created: 2020-07-18 22:40:43
$subpanel_layout['list_fields'] = array (
  'license_type_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_LICENSE_TYPE',
    'width' => '10%',
  ),
  'approval_not_needed_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_APPROVAL_NOT_NEEDED ',
    'width' => '10%',
  ),
  'approval_requester_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_APPROVAL_REQUESTER',
    'width' => '10%',
  ),
  'admin_login_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADMIN_LOGIN',
    'width' => '10%',
  ),
  'admin_user_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADMIN_USER_NAME',
    'width' => '10%',
  ),
  'admin_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADMIN_PASSWORD',
    'width' => '10%',
  ),
  'confirm_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CONFIRM_PASSWORD',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
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
    'module' => 'ptg_MicrosoftOffice',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_MicrosoftOffice',
    'width' => '5%',
    'default' => true,
  ),
);