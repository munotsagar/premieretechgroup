<?php
 // created: 2020-06-06 11:35:45
$layout_defs["Accounts"]["subpanel_setup"]['accounts_ptg_sharepoint_1'] = array (
  'order' => 100,
  'module' => 'ptg_SharePoint',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_PTG_SHAREPOINT_1_FROM_PTG_SHAREPOINT_TITLE',
  'get_subpanel_data' => 'accounts_ptg_sharepoint_1',
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
