<?php
$module_name = 'ptg_TroubleTicket';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'customer_name_c',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER_NAME',
          ),
          1 => 
          array (
            'name' => 'company_name_c',
            'label' => 'LBL_COMPANY_NAME',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ticket_type_c',
            'studio' => 'visible',
            'label' => 'LBL_TICKET_TYPE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'family_name_c',
            'studio' => 'visible',
            'label' => 'LBL_FAMILY_NAME',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'subject_c',
            'label' => 'LBL_SUBJECT',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'request_new_c',
            'label' => 'LBL_REQUEST_NEW',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'request_new_dropdown_c',
            'studio' => 'visible',
            'label' => 'LBL_REQUEST_NEW_DROPDOWN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description3_c',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION3',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'reporting_trouble_ticket_c',
            'label' => 'LBL_REPORTING_TROUBLE_TICKET',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'user_name_c',
            'label' => 'LBL_USER_NAME',
          ),
          1 => 
          array (
            'name' => 'password_c',
            'label' => 'LBL_PASSWORD',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'teamviewer_id_c',
            'label' => 'LBL_TEAMVIEWER_ID',
          ),
          1 => 
          array (
            'name' => 'password6_c',
            'label' => 'LBL_PASSWORD6',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'any_desk_id_c',
            'label' => 'LBL_ANY_DESK_ID',
          ),
          1 => 
          array (
            'name' => 'password2_c',
            'label' => 'LBL_PASSWORD2',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'solarwinds_id_c',
            'label' => 'LBL_SOLARWINDS_ID',
          ),
          1 => 
          array (
            'name' => 'password5_c',
            'label' => 'LBL_PASSWORD5',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'ninja_id_c',
            'label' => 'LBL_NINJA_ID',
          ),
          1 => 
          array (
            'name' => 'password9_c',
            'label' => 'LBL_PASSWORD9',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'connectwise_id_c',
            'label' => 'LBL_CONNECTWISE_ID',
          ),
          1 => 
          array (
            'name' => 'password7_c',
            'label' => 'LBL_PASSWORD7',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'continuum_id_c',
            'label' => 'LBL_CONTINUUM_ID',
          ),
          1 => 
          array (
            'name' => 'password4_c',
            'label' => 'LBL_PASSWORD4',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'logmein_id_c',
            'label' => 'LBL_LOGMEIN_ID',
          ),
          1 => 
          array (
            'name' => 'password3_c',
            'label' => 'LBL_PASSWORD3',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'gotomypc_id_c',
            'label' => 'LBL_GOTOMYPC_ID',
          ),
          1 => 
          array (
            'name' => 'password8_c',
            'label' => 'LBL_PASSWORD8',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'other_id_c',
            'label' => 'LBL_OTHER_ID',
          ),
          1 => 
          array (
            'name' => 'password10_c',
            'label' => 'LBL_PASSWORD10',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'reset_password_c',
            'label' => 'LBL_RESET_PASSWORD',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'reset_password_dropdown_c',
            'studio' => 'visible',
            'label' => 'LBL_RESET_PASSWORD_DROPDOWN',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'description2_c',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION2',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'trouble_ticket_amount_c',
            'label' => 'LBL_ TROUBLE_TICKET_AMOUNT',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'total_amount_time_spent_c',
            'label' => 'LBL_TOTAL_AMOUNT_TIME_SPENT',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'priority_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'name',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'department_c',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'position_c',
            'label' => 'LBL_POSITION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'telephone_c',
            'label' => 'LBL_TELEPHONE',
          ),
          1 => 
          array (
            'name' => 'extension_c',
            'label' => 'LBL_EXTENSION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'cellular_c',
            'label' => 'LBL_CELLULAR',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
