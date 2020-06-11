<?php
 // created: 2020-06-07 09:34:29
$layout_defs["Users"]["subpanel_setup"]['users_ptg_odbc_1'] = array (
  'order' => 100,
  'module' => 'ptg_ODBC',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_PTG_ODBC_1_FROM_PTG_ODBC_TITLE',
  'get_subpanel_data' => 'users_ptg_odbc_1',
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
