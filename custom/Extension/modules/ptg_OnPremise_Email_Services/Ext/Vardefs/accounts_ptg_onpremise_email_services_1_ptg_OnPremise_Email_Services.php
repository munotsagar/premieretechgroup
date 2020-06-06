<?php
// created: 2020-06-06 11:20:16
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["accounts_ptg_onpremise_email_services_1"] = array (
  'name' => 'accounts_ptg_onpremise_email_services_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_onpremise_email_services_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_onpremise_email_services_1accounts_ida',
);
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["accounts_ptg_onpremise_email_services_1_name"] = array (
  'name' => 'accounts_ptg_onpremise_email_services_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_onpremise_email_services_1accounts_ida',
  'link' => 'accounts_ptg_onpremise_email_services_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["accounts_ptg_onpremise_email_services_1accounts_ida"] = array (
  'name' => 'accounts_ptg_onpremise_email_services_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_onpremise_email_services_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_PTG_ONPREMISE_EMAIL_SERVICES_TITLE',
);
