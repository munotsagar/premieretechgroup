<?php
$viewdefs ['Users'] = 
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
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
      ),
      'javascript' => '<script type="text/javascript" src="modules/Users/UserEditView.js"></script>',
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
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'first_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
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
          0 => 
          array (
            'name' => 'photo',
            'label' => 'LBL_PHOTO',
          ),
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
          0 => 
          array (
            'name' => 'employee_status',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$EMPLOYEE_STATUS_READONLY}{/if}',
          ),
          1 => 'show_on_employees',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$TITLE_READONLY}{/if}',
          ),
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'department',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$DEPT_READONLY}{/if}',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'reports_to_name',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$REPORTS_TO_READONLY}{/if}',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'phone_home',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'messenger_type',
            'label' => 'LBL_MESSENGER_TYPE',
          ),
          1 => 
          array (
            'name' => 'messenger_id',
            'label' => 'LBL_MESSENGER_ID',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'address_street',
            'label' => 'LBL_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'address_city',
            'label' => 'LBL_ADDRESS_CITY',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'address_state',
            'label' => 'LBL_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'address_postalcode',
            'label' => 'LBL_ADDRESS_POSTALCODE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'address_country',
            'label' => 'LBL_ADDRESS_COUNTRY',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'full_name',
            'studio' => 
            array (
              'formula' => false,
            ),
            'label' => 'LBL_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
