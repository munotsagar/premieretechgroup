<?php
$module_name = 'ptg_HostedAntiSoftwareEmail';
$_object_name = 'ptg_hostedantisoftwareemail';
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
            'name' => 'services_provided_c',
            'studio' => 'visible',
            'label' => 'LBL_SERVICES_PROVIDED',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'user_login_name_c',
            'label' => 'LBL_USER_LOGIN_NAME',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'login_password_c',
            'label' => 'LBL_LOGIN_PASSWORD',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'confirm_password_c',
            'label' => 'LBL_CONFIRM_PASSWORD',
          ),
          1 => '',
        ),
        4 => 
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
