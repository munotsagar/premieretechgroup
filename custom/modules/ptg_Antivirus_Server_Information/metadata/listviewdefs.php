<?php
$module_name = 'ptg_Antivirus_Server_Information';
$listViewDefs [$module_name] = 
array (
  'WEBLINK_C' => 
  array (
    'type' => 'url',
    'default' => true,
    'label' => 'LBL_WEBLINK',
    'width' => '10%',
  ),
  'IP_ADDRESS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_IP_ADDRESS',
    'width' => '10%',
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
