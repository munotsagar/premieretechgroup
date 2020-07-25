<?php
// created: 2020-07-18 21:07:48
$subpanel_layout['list_fields'] = array (
  'printer_type_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRINTER_TYPE ',
    'width' => '10%',
  ),
  'scan_path_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SCAN_PATH',
    'width' => '10%',
  ),
  'printer_model_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRINTER_MODEL',
    'width' => '10%',
  ),
  'printer_type_network_local_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRINTER_TYPE_NETWORK_LOCAL',
    'width' => '10%',
  ),
  'admin_password_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADMIN_PASSWORD',
    'width' => '10%',
  ),
  'physical_location_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PHYSICAL_LOCATION',
    'width' => '10%',
  ),
  'ip_address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IP_ADDRESS',
    'width' => '10%',
  ),
  'admin_username_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADMIN_USERNAME',
    'width' => '10%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
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