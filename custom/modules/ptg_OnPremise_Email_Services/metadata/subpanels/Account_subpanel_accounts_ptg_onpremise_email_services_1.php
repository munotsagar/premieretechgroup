<?php
// created: 2020-07-18 21:45:56
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'server_roles_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SERVER_ROLES',
    'width' => '10%',
  ),
  'ip_address__c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IP_ADDRESS ',
    'width' => '10%',
  ),
  'vpn_ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VPN_IP_ADDRESS',
    'width' => '10%',
  ),
  'user_login_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_USER_LOGIN_NAME',
    'width' => '10%',
  ),
  'login_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LOGIN_PASSWORD',
    'width' => '10%',
  ),
  'confirm_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CONFIRM_PASSWORD',
    'width' => '10%',
  ),
  'hybrid_configuration_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_HYBRID_CONFIGURATION',
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
    'module' => 'ptg_OnPremise_Email_Services',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_OnPremise_Email_Services',
    'width' => '5%',
    'default' => true,
  ),
);