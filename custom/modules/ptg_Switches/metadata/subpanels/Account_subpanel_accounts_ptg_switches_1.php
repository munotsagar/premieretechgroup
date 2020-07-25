<?php
// created: 2020-07-18 21:57:17
$subpanel_layout['list_fields'] = array (
  'switch_type_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SWITCH_TYPE',
    'width' => '10%',
  ),
  'model_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_MODEL',
    'width' => '10%',
  ),
  'ip_address__c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IP_ADDRESS ',
    'width' => '10%',
  ),
  'switch_configured_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_SWITCH_CONFIGURED',
    'width' => '10%',
  ),
  'physical_location__c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PHYSICAL_LOCATION ',
    'width' => '10%',
  ),
  'access_via_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ACCESS_VIA',
    'width' => '10%',
  ),
  'vendor_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VENDOR',
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
    'module' => 'ptg_Switches',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_Switches',
    'width' => '5%',
    'default' => true,
  ),
);