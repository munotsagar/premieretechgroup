<?php
 // created: 2020-06-06 11:21:42
$layout_defs["Accounts"]["subpanel_setup"]['accounts_ptg_client_connectivity_1'] = array (
  'order' => 100,
  'module' => 'ptg_Client_Connectivity',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_PTG_CLIENT_CONNECTIVITY_1_FROM_PTG_CLIENT_CONNECTIVITY_TITLE',
  'get_subpanel_data' => 'accounts_ptg_client_connectivity_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
