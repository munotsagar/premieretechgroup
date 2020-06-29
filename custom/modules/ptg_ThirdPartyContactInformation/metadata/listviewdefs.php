<?php
$module_name = 'ptg_ThirdPartyContactInformation';
$OBJECT_NAME = 'PTG_THIRDPARTYCONTACTINFORMATION';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'PHONE_C' => 
  array (
    'type' => 'phone',
    'default' => true,
    'label' => 'LBL_PHONE',
    'width' => '10%',
  ),
  'EMAIL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EMAIL',
    'width' => '10%',
  ),
  'COMPANY_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMPANY',
    'width' => '10%',
  ),
  'ROLE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ROLE',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
;
?>
