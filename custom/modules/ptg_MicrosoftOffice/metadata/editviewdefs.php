<?php
$module_name = 'ptg_MicrosoftOffice';
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
            'name' => 'office_product_type_c',
            'studio' => 'visible',
            'label' => 'LBL_OFFICE_PRODUCT_TYPE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'subcription_plan_c',
            'label' => 'LBL_SUBCRIPTION_PLAN',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'admin_user_name_c',
            'label' => 'LBL_ADMIN_USER_NAME',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'admin_password_c',
            'label' => 'LBL_ADMIN_PASSWORD',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'approval_requester_c',
            'label' => 'LBL_APPROVAL_REQUESTER',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'approval_not_needed_c',
            'label' => 'LBL_APPROVAL_NOT_NEEDED ',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
