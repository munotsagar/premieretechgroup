<?php
// created: 2020-06-07 10:10:16
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["users_ptg_onpremise_email_services_1"] = array (
  'name' => 'users_ptg_onpremise_email_services_1',
  'type' => 'link',
  'relationship' => 'users_ptg_onpremise_email_services_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_USERS_TITLE',
  'id_name' => 'users_ptg_onpremise_email_services_1users_ida',
);
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["users_ptg_onpremise_email_services_1_name"] = array (
  'name' => 'users_ptg_onpremise_email_services_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_ptg_onpremise_email_services_1users_ida',
  'link' => 'users_ptg_onpremise_email_services_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ptg_OnPremise_Email_Services"]["fields"]["users_ptg_onpremise_email_services_1users_ida"] = array (
  'name' => 'users_ptg_onpremise_email_services_1users_ida',
  'type' => 'link',
  'relationship' => 'users_ptg_onpremise_email_services_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_PTG_ONPREMISE_EMAIL_SERVICES_1_FROM_PTG_ONPREMISE_EMAIL_SERVICES_TITLE',
);
