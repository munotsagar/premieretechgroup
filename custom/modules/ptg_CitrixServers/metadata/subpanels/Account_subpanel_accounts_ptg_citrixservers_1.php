<?php
// created: 2020-07-18 22:00:07
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
  'farm_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_FARM_NAME',
    'width' => '10%',
  ),
  'ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IP_ADDRESS',
    'width' => '10%',
  ),
  'url_thin_client_c' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_URL_THIN_CLIENT ',
    'width' => '10%',
  ),
  'citrix_server_type_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CITRIX_SERVER_TYPE',
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
  'vpn_ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VPN_IP_ADDRESS',
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
    'module' => 'ptg_CitrixServers',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_CitrixServers',
    'width' => '5%',
    'default' => true,
  ),
);