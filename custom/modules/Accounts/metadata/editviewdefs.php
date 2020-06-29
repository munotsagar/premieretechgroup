<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'net_terms_c',
            'studio' => 'visible',
            'label' => 'LBL_NET_TERMS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'customer_id_c',
            'label' => 'LBL_CUSTOMER_ID',
          ),
          1 => 
          array (
            'name' => 'photo_c',
            'studio' => 'visible',
            'label' => 'LBL_PHOTO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'customer_rating_c',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER_RATING',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'reseller_license_no_c',
            'label' => 'LBL_RESELLER_LICENSE_NO',
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bank_name_c',
            'label' => 'LBL_BANK_NAME',
          ),
          1 => 'account_type',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_number_c',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'tax_id_number_c',
            'label' => 'LBL_TAX_ID_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tax_exempted_c',
            'studio' => 'visible',
            'label' => 'LBL_TAX_EXEMPTED',
          ),
          1 => 
          array (
            'name' => 'comment_c',
            'label' => 'LBL_COMMENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reference1_c',
            'label' => 'LBL_REFERENCE1',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'reference2_c',
            'label' => 'LBL_REFERENCE2',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reference3_c',
            'label' => 'LBL_REFERENCE3',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bank_card1name_c',
            'label' => 'LBL_BANK_CARD1NAME',
          ),
          1 => 
          array (
            'name' => 'type1_c',
            'label' => 'LBL_TYPE1',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cc1_c',
            'label' => 'LBL_CC1',
          ),
          1 => 
          array (
            'name' => 'exp1_c',
            'label' => 'LBL_EXP1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ccid1_c',
            'label' => 'LBL_CCID1',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bank_card2name_c',
            'label' => 'LBL_BANK_CARD2NAME',
          ),
          1 => 
          array (
            'name' => 'type2_c',
            'label' => 'LBL_TYPE2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bank_card2cc_c',
            'label' => 'LBL_BANK_CARD2CC',
          ),
          1 => 
          array (
            'name' => 'exp2_c',
            'label' => 'LBL_EXP2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ccid2_c',
            'label' => 'LBL_CCID2',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bank_card3name_c',
            'label' => 'LBL_BANK_CARD3NAME',
          ),
          1 => 
          array (
            'name' => 'type3_c',
            'label' => 'LBL_TYPE3',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bank_card3cc_c',
            'label' => 'LBL_BANK_CARD3CC',
          ),
          1 => 
          array (
            'name' => 'exp3_c',
            'label' => 'LBL_EXP3',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ccid3_c',
            'label' => 'LBL_CCID3',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bank_card4name_c',
            'label' => 'LBL_BANK_CARD4NAME',
          ),
          1 => 
          array (
            'name' => 'type4_c',
            'label' => 'LBL_TYPE4',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bank_card4cc_c',
            'label' => 'LBL_BANK_CARD4CC',
          ),
          1 => 
          array (
            'name' => 'exp4_c',
            'label' => 'LBL_EXP4',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ccid4_c',
            'label' => 'LBL_CCID4',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bank_card5name_c',
            'label' => 'LBL_BANK_CARD5NAME',
          ),
          1 => 
          array (
            'name' => 'type5_c',
            'label' => 'LBL_TYPE5',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bank_card5cc_c',
            'label' => 'LBL_BANK_CARD5CC',
          ),
          1 => 
          array (
            'name' => 'exp5_c',
            'label' => 'LBL_EXP5',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ccid5_c',
            'label' => 'LBL_CCID5',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rating',
            'comment' => 'An arbitrary rating for this company for use in comparisons with others',
            'label' => 'LBL_RATING',
          ),
        ),
      ),
    ),
  ),
);
;
?>
