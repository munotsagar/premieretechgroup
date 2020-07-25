<?php
// created: 2020-07-18 21:03:34
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'domain_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOMAIN_NAME',
    'width' => '10%',
  ),
  'web_host_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_WEB_HOST',
    'width' => '10%',
  ),
  'name_servers_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_NAME_SERVERS',
    'width' => '10%',
  ),
  'registrar_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REGISTRAR_PASSWORD',
    'width' => '10%',
  ),
  'registrar_login_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REGISTRAR_LOGIN',
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
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
    'width' => '4%',
    'vname' => 'LBL_EDIT_BUTTON',
    'default' => true,
    'widget_class' => 'SubPanelEditButton',
  ),
  'remove_button' => 
  array (
    'width' => '5%',
    'vname' => 'LBL_REMOVE',
    'default' => true,
    'widget_class' => 'SubPanelRemoveButton',
  ),
);