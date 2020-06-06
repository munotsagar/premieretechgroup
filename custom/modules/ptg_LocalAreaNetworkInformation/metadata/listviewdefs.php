<?php
$module_name = 'ptg_LocalAreaNetworkInformation';
$OBJECT_NAME = 'PTG_LOCALAREANETWORKINFORMATION';
$listViewDefs [$module_name] = 
array (
  'LOCAL_IP_RANGE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_LOCAL_IP_RANGE',
    'width' => '10%',
  ),
  'EXTERNAL_IP_ADDRESS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EXTERNAL_IP_ADDRESS',
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
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
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
