<?php
$module_name = 'ptg_Switches';
$_object_name = 'ptg_switches';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
            'name' => 'switch_type_c',
            'studio' => 'visible',
            'label' => 'LBL_SWITCH_TYPE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'switch_configured_c',
            'label' => 'LBL_SWITCH_CONFIGURED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'vendor_c',
            'label' => 'LBL_VENDOR',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'model_c',
            'label' => 'LBL_MODEL',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'access_via_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCESS_VIA',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ip_address__c',
            'label' => 'LBL_IP_ADDRESS ',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'physical_location__c',
            'label' => 'LBL_PHYSICAL_LOCATION ',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
