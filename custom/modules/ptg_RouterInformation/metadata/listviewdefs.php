<?php
$module_name = 'ptg_RouterInformation';
$OBJECT_NAME = 'PTG_ROUTERINFORMATION';
$listViewDefs [$module_name] = 
array (
  'ROUTER_IP_URL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ROUTER_IP_URL',
    'width' => '10%',
  ),
  'ROUTER_LOGIN_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ROUTER_LOGIN',
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
