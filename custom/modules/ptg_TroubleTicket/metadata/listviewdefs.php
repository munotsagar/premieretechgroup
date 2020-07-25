<?php
$module_name = 'ptg_TroubleTicket';
$listViewDefs [$module_name] = 
array (
  'TICKET_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TICKET_NUMBER',
    'width' => '10%',
    'link' => true,
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TICKET_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TICKET_TYPE',
    'width' => '10%',
  ),
  'FAMILY_NAME_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_FAMILY_NAME',
    'width' => '10%',
  ),
  'TROUBLE_TICKET_AMOUNT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ TROUBLE_TICKET_AMOUNT',
    'width' => '10%',
  ),
  'TOTAL_AMOUNT_TIME_SPENT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TOTAL_AMOUNT_TIME_SPENT',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
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
