<?php
// created: 2020-07-18 21:59:05
$subpanel_layout['list_fields'] = array (
  'weblink_c' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_WEBLINK',
    'width' => '10%',
  ),
  'type_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'vpn_ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VPN_IP_ADDRESS',
    'width' => '10%',
  ),
  'wap_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_WAP',
    'width' => '10%',
  ),
  'physical_location_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PHYSICAL_LOCATION',
    'width' => '10%',
  ),
  'ssid_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SSID',
    'width' => '10%',
  ),
  'ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IP_ADDRESS',
    'width' => '10%',
  ),
  'encryption_key_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ENCRYPTION_KEY',
    'width' => '10%',
  ),
  'login_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LOGIN',
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
    'module' => 'ptg_WirelessInformation',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_WirelessInformation',
    'width' => '5%',
    'default' => true,
  ),
);