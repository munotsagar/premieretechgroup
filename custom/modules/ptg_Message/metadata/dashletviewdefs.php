<?php
$dashletData['ptg_MessageDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['ptg_MessageDashlet']['columns'] = array (
  'select_user_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SELECT_USER',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'select_user_c',
  ),
  'select_employee_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SELECT_EMPLOYEE',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'select_employee_c',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
