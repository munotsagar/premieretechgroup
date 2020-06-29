<?php
$module_name = 'ptg_SharePoint';
$OBJECT_NAME = 'PTG_SHAREPOINT';
$listViewDefs [$module_name] = 
array (
  'SHARE_POINT_URL__C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SHARE_POINT_URL ',
    'width' => '10%',
  ),
  'MAIN_TEAM_SITE_URL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MAIN_TEAM_SITE_URL',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => true,
    'sortable' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
;
?>
