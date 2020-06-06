<?php
// created: 2020-06-06 11:35:45
$dictionary["ptg_SharePoint"]["fields"]["accounts_ptg_sharepoint_1"] = array (
  'name' => 'accounts_ptg_sharepoint_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sharepoint_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINT_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_sharepoint_1accounts_ida',
);
$dictionary["ptg_SharePoint"]["fields"]["accounts_ptg_sharepoint_1_name"] = array (
  'name' => 'accounts_ptg_sharepoint_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINT_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_sharepoint_1accounts_ida',
  'link' => 'accounts_ptg_sharepoint_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_SharePoint"]["fields"]["accounts_ptg_sharepoint_1accounts_ida"] = array (
  'name' => 'accounts_ptg_sharepoint_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_sharepoint_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_SHAREPOINT_1_FROM_PTG_SHAREPOINT_TITLE',
);
