<?php
$module_name = 'ptg_Message';
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'select_user_c',
            'studio' => 'visible',
            'label' => 'LBL_SELECT_USER',
          ),
          1 => 
          array (
            'name' => 'select_employee_c',
            'studio' => 'visible',
            'label' => 'LBL_SELECT_EMPLOYEE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'attach_documents_c',
            'label' => 'LBL_ATTACH_DOCUMENTS',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
