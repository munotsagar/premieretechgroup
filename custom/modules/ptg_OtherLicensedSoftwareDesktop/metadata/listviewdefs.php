<?php
$module_name = 'ptg_OtherLicensedSoftwareDesktop';
$OBJECT_NAME = 'PTG_OTHERLICENSEDSOFTWAREDESKTOP';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'VERSION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VERSION',
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
