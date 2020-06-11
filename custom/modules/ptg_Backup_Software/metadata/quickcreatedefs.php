<?php
$module_name = 'ptg_Backup_Software';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'server_c',
            'label' => 'LBL_SERVER',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'weblink_c',
            'label' => 'LBL_WEBLINK',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'vpn_ip_address_c',
            'label' => 'LBL_VPN_IP_ADDRESS',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ip_address_c',
            'label' => 'LBL_IP_ADDRESS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'login_c',
            'label' => 'LBL_LOGIN',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'password_c',
            'label' => 'LBL_PASSWORD',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'confirm_password_c',
            'label' => 'LBL_CONFIRM_PASSWORD',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
