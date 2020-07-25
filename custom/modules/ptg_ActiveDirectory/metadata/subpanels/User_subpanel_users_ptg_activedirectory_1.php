<?php
// created: 2020-07-18 20:14:29
$subpanel_layout['list_fields'] = array (
  'ou_template_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_OU_TEMPLATE',
    'width' => '10%',
  ),
  'please_upload_c' => 
  array (
    'type' => 'documents',
    'default' => true,
    'vname' => 'LBL_PLEASE_UPLOAD',
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
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ptg_ActiveDirectory',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_ActiveDirectory',
    'width' => '5%',
    'default' => true,
  ),
);