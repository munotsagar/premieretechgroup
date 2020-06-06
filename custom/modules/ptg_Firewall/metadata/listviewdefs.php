<?php
$module_name = 'ptg_Firewall';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MODEL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MODEL',
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
