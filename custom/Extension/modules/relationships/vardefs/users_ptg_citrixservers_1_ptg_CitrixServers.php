<?php
// created: 2020-06-07 10:22:46
$dictionary["ptg_CitrixServers"]["fields"]["users_ptg_citrixservers_1"] = array (
  'name' => 'users_ptg_citrixservers_1',
  'type' => 'link',
  'relationship' => 'users_ptg_citrixservers_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_CITRIXSERVERS_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_citrixservers_1users_ida',
);
$dictionary["ptg_CitrixServers"]["fields"]["users_ptg_citrixservers_1_name"] = array (
  'name' => 'users_ptg_citrixservers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_CITRIXSERVERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_citrixservers_1users_ida',
  'link' => 'users_ptg_citrixservers_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_CitrixServers"]["fields"]["users_ptg_citrixservers_1users_ida"] = array (
  'name' => 'users_ptg_citrixservers_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_citrixservers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_CITRIXSERVERS_1_FROM_PTG_CITRIXSERVERS_TITLE',
);
