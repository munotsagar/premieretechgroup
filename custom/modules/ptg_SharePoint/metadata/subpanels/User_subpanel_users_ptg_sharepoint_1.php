<?php
// created: 2020-07-18 20:58:14
$subpanel_layout['list_fields'] = array (
  'share_point_url__c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SHARE_POINT_URL ',
    'width' => '10%',
  ),
  'main_team_site_url_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_MAIN_TEAM_SITE_URL',
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
    'module' => 'ptg_SharePoint',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_SharePoint',
    'width' => '5%',
    'default' => true,
  ),
);