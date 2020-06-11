<?php
 // created: 2020-06-07 10:24:53
$layout_defs["Users"]["subpanel_setup"]['users_ptg_resources_1'] = array (
  'order' => 100,
  'module' => 'ptg_Resources',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_PTG_RESOURCES_1_FROM_PTG_RESOURCES_TITLE',
  'get_subpanel_data' => 'users_ptg_resources_1',
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
