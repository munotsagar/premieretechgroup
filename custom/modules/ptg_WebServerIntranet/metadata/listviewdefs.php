<?php
$module_name = 'ptg_WebServerIntranet';
$OBJECT_NAME = 'PTG_WEBSERVERINTRANET';
$listViewDefs [$module_name] = 
array (
  'SERVER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SERVER',
    'width' => '10%',
  ),
  'URL_C' => 
  array (
    'type' => 'url',
    'default' => true,
    'label' => 'LBL_URL',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => true,
    'sortable' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
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
