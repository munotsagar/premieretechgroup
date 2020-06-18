<?php
$viewdefs ['Users'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMPLOYEE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'useTabs' => true,
    'tabDefs' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'user_name',
          1 => 
          array (
            'name' => 'first_name',
            'label' => 'LBL_FIRST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'last_name',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{$USER_TYPE_READONLY}',
          ),
          1 => 
          array (
            'name' => 'user_category_c',
            'studio' => 'visible',
            'label' => 'LBL_USER_CATEGORY',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'voice_service_c',
            'label' => 'LBL_VOICE_SERVICE',
          ),
          1 => 
          array (
            'name' => 'local_service_c',
            'label' => 'LBL_LOCAL_SERVICE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'data_service_c',
            'label' => 'LBL_DATA_SERVICE',
          ),
          1 => 
          array (
            'name' => 'cloud_service_c',
            'label' => 'LBL_CLOUD_SERVICE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'other_service_c',
            'label' => 'LBL_OTHER_SERVICE',
          ),
          1 => 
          array (
            'name' => 'trouble_ticket_commission_c',
            'label' => 'LBL_TROUBLE_TICKET_COMMISSION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'organization_c',
            'label' => 'LBL_ORGANIZATION',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'photo',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'factor_auth',
            'label' => 'LBL_FACTOR_AUTH',
          ),
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'employee_status',
          1 => 'show_on_employees',
        ),
        1 => 
        array (
          0 => 'title',
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 'department',
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 'reports_to_name',
          1 => 'phone_other',
        ),
        4 => 
        array (
          0 => '',
          1 => 'phone_fax',
        ),
        5 => 
        array (
          0 => '',
          1 => 'phone_home',
        ),
        6 => 
        array (
          0 => 'messenger_type',
          1 => 'messenger_id',
        ),
        7 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        8 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        9 => 
        array (
          0 => 'address_country',
        ),
        10 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'full_name',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
