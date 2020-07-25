<?php
// created: 2020-07-18 21:41:12
$subpanel_layout['list_fields'] = array (
  'weblink_c' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_WEBLINK',
    'width' => '10%',
  ),
  'server_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SERVER',
    'width' => '10%',
  ),
  'login_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LOGIN',
    'width' => '10%',
  ),
  'ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IP_ADDRESS',
    'width' => '10%',
  ),
  'vpn_ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VPN_IP_ADDRESS',
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
    'module' => 'ptg_Backup_Software',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_Backup_Software',
    'width' => '5%',
    'default' => true,
  ),
);