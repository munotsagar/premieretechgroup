<?php
$module_name = 'ptg_TroubleTicketVendorCommission';
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
  'SELECT_TROUBLE_TICKET_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SELECT_TROUBLE_TICKET',
    'id' => 'PTG_TROUBLETICKET_ID_C',
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
  'TROUBLETICKETCOMMISSIONAMT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TROUBLETICKETCOMMISSIONAMT',
    'width' => '10%',
  ),
  'AMOUNT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
  ),
  'VENDOR_COMMISSION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VENDOR_COMMISSION',
    'width' => '10%',
  ),
);
;
?>
