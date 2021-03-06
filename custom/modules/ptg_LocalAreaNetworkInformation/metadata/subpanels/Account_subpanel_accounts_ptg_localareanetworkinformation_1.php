<?php
// created: 2020-07-18 21:54:54
$subpanel_layout['list_fields'] = array (
  'domain_server_login_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOMAIN_SERVER_LOGIN',
    'width' => '10%',
  ),
  'gateway_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_GATEWAY',
    'width' => '10%',
  ),
  'secondary_domain_controller_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SECONDARY_DOMAIN_CONTROLLER',
    'width' => '10%',
  ),
  'client_hostname_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CLIENT_HOSTNAME',
    'width' => '10%',
  ),
  'dns_servers_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DNS_SERVERS',
    'width' => '10%',
  ),
  'domain_server_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOMAIN_SERVER_PASSWORD',
    'width' => '10%',
  ),
  'subnet_mask_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SUBNET_MASK',
    'width' => '10%',
  ),
  'domain_server_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOMAIN_SERVER_NAME',
    'width' => '10%',
  ),
  'primary_domain_controller_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRIMARY_DOMAIN_CONTROLLER',
    'width' => '10%',
  ),
  'confirm_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CONFIRM_PASSWORD',
    'width' => '10%',
  ),
  'external_ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EXTERNAL_IP_ADDRESS',
    'width' => '10%',
  ),
  'windows_domain_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_WINDOWS_DOMAIN',
    'width' => '10%',
  ),
  'local_ip_range_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LOCAL_IP_RANGE',
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
    'module' => 'ptg_LocalAreaNetworkInformation',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_LocalAreaNetworkInformation',
    'width' => '5%',
    'default' => true,
  ),
);