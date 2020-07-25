<?php
// created: 2020-07-18 22:16:55
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
  'phone_c' => 
  array (
    'type' => 'phone',
    'default' => true,
    'vname' => 'LBL_PHONE',
    'width' => '10%',
  ),
  'email_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EMAIL',
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