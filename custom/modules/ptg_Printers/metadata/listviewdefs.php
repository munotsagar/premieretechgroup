<?php
$module_name = 'ptg_Printers';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRINTER_MODEL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRINTER_MODEL',
    'width' => '10%',
  ),
  'IP_ADDRESS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_IP_ADDRESS',
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
