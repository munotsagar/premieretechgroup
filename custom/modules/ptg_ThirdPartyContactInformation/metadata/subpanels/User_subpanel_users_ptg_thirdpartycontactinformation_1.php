<?php
// created: 2020-07-18 21:01:20
$subpanel_layout['list_fields'] = array (
  'document_name' => 
  array (
    'type' => 'name',
    'link' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'email_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EMAIL',
    'width' => '10%',
  ),
  'phone_c' => 
  array (
    'type' => 'phone',
    'default' => true,
    'vname' => 'LBL_PHONE',
    'width' => '10%',
  ),
  'company_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_COMPANY',
    'width' => '10%',
  ),
  'role_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ROLE',
    'width' => '10%',
  ),
  'website_c' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_WEBSITE',
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
    'module' => 'ptg_ThirdPartyContactInformation',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_ThirdPartyContactInformation',
    'width' => '5%',
    'default' => true,
  ),
);