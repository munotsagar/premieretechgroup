<?php
// created: 2020-07-18 21:02:16
$subpanel_layout['list_fields'] = array (
  'address_or_ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADDRESS_OR_IP_ADDRESS',
    'width' => '10%',
  ),
  'port_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PORT',
    'width' => '10%',
  ),
  'alias_or_location_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ALIAS_OR_LOCATION_NAME',
    'width' => '10%',
  ),
  'system_manufacture_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SYSTEM_MANUFACTURE',
    'width' => '10%',
  ),
  'register_mode_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_REGISTER_MODE',
    'width' => '10%',
  ),
  'admin_user_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADMIN_USER_NAME',
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
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ptg_Camera_System',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_Camera_System',
    'width' => '5%',
    'default' => true,
  ),
);