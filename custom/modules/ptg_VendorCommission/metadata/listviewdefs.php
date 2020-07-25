<?php
$module_name = 'ptg_VendorCommission';
$listViewDefs [$module_name] = 
array (
  'VENDOR_NAME_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_VENDOR_NAME',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'SELECT_QUOTE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SELECT_QUOTE',
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
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
  ),
  'TOTALCOMMISSIONAMOUNT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TOTALCOMMISSIONAMOUNT',
    'width' => '10%',
  ),
  'EMPLOYEE_COMMISSION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EMPLOYEE_COMMISSION',
    'width' => '10%',
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
