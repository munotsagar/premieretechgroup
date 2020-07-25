<?php
// created: 2020-07-18 21:51:41
$subpanel_layout['list_fields'] = array (
  'customer_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CUSTOMER_NAME',
    'width' => '10%',
  ),
  'address_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADDRESS',
    'width' => '10%',
  ),
  'name_of_account_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_NAME_OF_ACCOUNT',
    'width' => '10%',
  ),
  'subnet_mask_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SUBNET_MASK',
    'width' => '10%',
  ),
  'type_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'provider_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PROVIDER',
    'width' => '10%',
  ),
  'dns_servers_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DNS_SERVERS',
    'width' => '10%',
  ),
  'pppoe_info_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PPPOE_INFO',
    'width' => '10%',
  ),
  'customer_access_code_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CUSTOMER_ACCESS_CODE',
    'width' => '10%',
  ),
  'gateway_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_GATEWAY',
    'width' => '10%',
  ),
  'account_number_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
  ),
  'public_ip_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PUBLIC_IP',
    'width' => '10%',
  ),
  'upload_one_recent_bill_c' => 
  array (
    'type' => 'documents',
    'default' => true,
    'vname' => 'LBL_UPLOAD_ONE_RECENT_BILL',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ptg_ISP_Information',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ptg_ISP_Information',
    'width' => '5%',
    'default' => true,
  ),
);