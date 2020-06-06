<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:34:49
$dictionary["ptg_OtherUnlicensedSoftware"]["fields"]["accounts_ptg_otherunlicensedsoftware_1"] = array (
  'name' => 'accounts_ptg_otherunlicensedsoftware_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_otherunlicensedsoftware_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERUNLICENSEDSOFTWARE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_otherunlicensedsoftware_1accounts_ida',
);
$dictionary["ptg_OtherUnlicensedSoftware"]["fields"]["accounts_ptg_otherunlicensedsoftware_1_name"] = array (
  'name' => 'accounts_ptg_otherunlicensedsoftware_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERUNLICENSEDSOFTWARE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_otherunlicensedsoftware_1accounts_ida',
  'link' => 'accounts_ptg_otherunlicensedsoftware_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_OtherUnlicensedSoftware"]["fields"]["accounts_ptg_otherunlicensedsoftware_1accounts_ida"] = array (
  'name' => 'accounts_ptg_otherunlicensedsoftware_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_otherunlicensedsoftware_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_OTHERUNLICENSEDSOFTWARE_1_FROM_PTG_OTHERUNLICENSEDSOFTWARE_TITLE',
);


 // created: 2020-06-06 08:07:19
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['document_name']['required']=false;
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-06 08:10:56
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['requires_approval_c']['inline_edit']='1';
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['requires_approval_c']['labelValue']='Requires Approval';

 

 // created: 2020-06-06 08:07:32
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['active_date']['required']=false;
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_OtherUnlicensedSoftware']['fields']['active_date']['enable_range_search']=false;

 
?>