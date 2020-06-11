<?php
// created: 2020-06-07 10:04:09
$dictionary["ptg_Network_Drives"]["fields"]["users_ptg_network_drives_1"] = array (
  'name' => 'users_ptg_network_drives_1',
  'type' => 'link',
  'relationship' => 'users_ptg_network_drives_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_NETWORK_DRIVES_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_network_drives_1users_ida',
);
$dictionary["ptg_Network_Drives"]["fields"]["users_ptg_network_drives_1_name"] = array (
  'name' => 'users_ptg_network_drives_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_NETWORK_DRIVES_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_network_drives_1users_ida',
  'link' => 'users_ptg_network_drives_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_Network_Drives"]["fields"]["users_ptg_network_drives_1users_ida"] = array (
  'name' => 'users_ptg_network_drives_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_network_drives_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_NETWORK_DRIVES_1_FROM_PTG_NETWORK_DRIVES_TITLE',
);
