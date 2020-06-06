<?php
$module_name = 'ptg_TroubleTicketEmployeeCommission';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'employee_name_c',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_NAME',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'select_trouble_ticket_c',
            'studio' => 'visible',
            'label' => 'LBL_SELECT_TROUBLE_TICKET',
          ),
          1 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'commission_type_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMISSION_TYPE',
          ),
          1 => 
          array (
            'name' => 'commission_c',
            'label' => 'LBL_COMMISSION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
