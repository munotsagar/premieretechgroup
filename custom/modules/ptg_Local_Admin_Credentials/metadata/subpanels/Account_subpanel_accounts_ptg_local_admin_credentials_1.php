<?php
// created: 2020-07-18 21:44:53
$subpanel_layout['list_fields'] = array (
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
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
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
    'module' => 'ptg_Local_Admin_Credentials',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_Local_Admin_Credentials',
    'width' => '5%',
    'default' => true,
  ),
);