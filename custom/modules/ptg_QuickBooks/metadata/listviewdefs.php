<?php
$module_name = 'ptg_QuickBooks';
$OBJECT_NAME = 'PTG_QUICKBOOKS';
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
  'USERNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_USERNAME',
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
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => false,
  ),
);
;
?>
