<?php
$module_name = 'ptg_Backup_Software';
$listViewDefs [$module_name] = 
array (
  'SERVER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SERVER',
    'width' => '10%',
  ),
  'WEBLINK_C' => 
  array (
    'type' => 'url',
    'default' => true,
    'label' => 'LBL_WEBLINK',
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
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
