<?php
 // created: 2020-06-06 10:07:08
$layout_defs["Accounts"]["subpanel_setup"]['accounts_ptg_firewall_1'] = array (
  'order' => 100,
  'module' => 'ptg_Firewall',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_PTG_FIREWALL_1_FROM_PTG_FIREWALL_TITLE',
  'get_subpanel_data' => 'accounts_ptg_firewall_1',
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
