<?php
$module_name = 'ptg_Switches';
$OBJECT_NAME = 'PTG_SWITCHES';
$listViewDefs [$module_name] = 
array (
  'SWITCH_TYPE_C' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SWITCH_TYPE',
    'width' => '10%',
  ),
  'VENDOR_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VENDOR',
    'width' => '10%',
  ),
  'MODEL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MODEL',
    'width' => '10%',
  ),
  'IP_ADDRESS__C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_IP_ADDRESS ',
    'width' => '10%',
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
