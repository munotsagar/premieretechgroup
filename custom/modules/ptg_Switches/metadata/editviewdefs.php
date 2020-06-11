<?php
$module_name = 'ptg_Switches';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          ),
        ),
      ),
    ),
  ),
);
;
?>
