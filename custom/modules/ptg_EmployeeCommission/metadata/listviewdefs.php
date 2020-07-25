<?php
$module_name = 'ptg_EmployeeCommission';
$listViewDefs [$module_name] = 
array (
  'EMPLOYEE_NAME_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYEE_NAME',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'QUOTE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_QUOTE',
    'id' => 'AOS_QUOTES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'COMMISSION_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COMMISSION_TYPE',
    'width' => '10%',
  ),
  'COMMISSION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMMISSION',
    'width' => '10%',
  ),
  'AMOUNT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ AMOUNT',
    'width' => '10%',
  ),
  'TOTAL_COMMISSION_AMOUNT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TOTAL_COMMISSION_AMOUNT',
    'width' => '10%',
  ),
  'EMPLOYEE_COMMISSION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EMPLOYEE_COMMISSION',
    'width' => '10%',
  ),
);
;
?>
