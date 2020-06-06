<?php
// created: 2020-06-06 11:21:42
$dictionary["ptg_Client_Connectivity"]["fields"]["accounts_ptg_client_connectivity_1"] = array (
  'name' => 'accounts_ptg_client_connectivity_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_client_connectivity_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_CLIENT_CONNECTIVITY_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_client_connectivity_1accounts_ida',
);
$dictionary["ptg_Client_Connectivity"]["fields"]["accounts_ptg_client_connectivity_1_name"] = array (
  'name' => 'accounts_ptg_client_connectivity_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_CLIENT_CONNECTIVITY_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_client_connectivity_1accounts_ida',
  'link' => 'accounts_ptg_client_connectivity_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_Client_Connectivity"]["fields"]["accounts_ptg_client_connectivity_1accounts_ida"] = array (
  'name' => 'accounts_ptg_client_connectivity_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_client_connectivity_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_CLIENT_CONNECTIVITY_1_FROM_PTG_CLIENT_CONNECTIVITY_TITLE',
);
