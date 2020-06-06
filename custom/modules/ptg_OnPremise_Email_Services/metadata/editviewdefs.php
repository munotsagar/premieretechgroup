<?php
$module_name = 'ptg_OnPremise_Email_Services';
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
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'vpn_ip_address_c',
            'label' => 'LBL_VPN_IP_ADDRESS',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ip_address__c',
            'label' => 'LBL_IP_ADDRESS ',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'user_login_name_c',
            'label' => 'LBL_USER_LOGIN_NAME',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'login_password_c',
            'label' => 'LBL_LOGIN_PASSWORD',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'confirm_password_c',
            'label' => 'LBL_CONFIRM_PASSWORD',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'server_roles_c',
            'studio' => 'visible',
            'label' => 'LBL_SERVER_ROLES',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'hybrid_configuration_c',
            'label' => 'LBL_HYBRID_CONFIGURATION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
