<?php
// created: 2020-07-18 22:01:28
$subpanel_layout['list_fields'] = array (
  'external_link_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EXTERNAL_LINK',
    'width' => '10%',
  ),
  'vpn_client_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VPN_CLIENT',
    'width' => '10%',
  ),
  'port_forwarding_number_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PORT_FORWARDING_NUMBER',
    'width' => '10%',
  ),
  'rdp_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_RDP',
    'width' => '10%',
  ),
  'vpn_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VPN',
    'width' => '10%',
  ),
  'user_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_USER_NAME',
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
    'module' => 'ptg_RemoteAccessInformation',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_RemoteAccessInformation',
    'width' => '5%',
    'default' => true,
  ),
);