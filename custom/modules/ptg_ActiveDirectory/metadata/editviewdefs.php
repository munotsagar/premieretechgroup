<?php
$module_name = 'ptg_ActiveDirectory';
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
            'name' => 'ou_template_c',
            'label' => 'LBL_OU_TEMPLATE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'please_upload_c',
            'label' => 'LBL_PLEASE_UPLOAD',
          ),
        ),
        2 => 
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
