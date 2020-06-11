<?php
 // created: 2020-06-07 10:04:09
$layout_defs["Users"]["subpanel_setup"]['users_ptg_network_drives_1'] = array (
  'order' => 100,
  'module' => 'ptg_Network_Drives',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_PTG_NETWORK_DRIVES_1_FROM_PTG_NETWORK_DRIVES_TITLE',
  'get_subpanel_data' => 'users_ptg_network_drives_1',
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
