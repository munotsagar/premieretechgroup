<?php
$module_name = 'ptg_MicrosoftOffice';
$OBJECT_NAME = 'PTG_MICROSOFTOFFICE';
$listViewDefs [$module_name] = 
array (
  'LICENSE_TYPE_C' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LICENSE_TYPE',
    'width' => '10%',
  ),
  'ADMIN_LOGIN_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADMIN_LOGIN',
    'width' => '10%',
  ),
  'ADMIN_USER_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADMIN_USER_NAME',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => true,
    'sortable' => false,
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
