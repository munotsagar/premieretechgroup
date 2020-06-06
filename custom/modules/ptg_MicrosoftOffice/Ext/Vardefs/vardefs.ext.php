<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-06 11:33:00
$dictionary["ptg_MicrosoftOffice"]["fields"]["accounts_ptg_microsoftoffice_1"] = array (
  'name' => 'accounts_ptg_microsoftoffice_1',
  'type' => 'link',
  'relationship' => 'accounts_ptg_microsoftoffice_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PTG_MICROSOFTOFFICE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ptg_microsoftoffice_1accounts_ida',
);
$dictionary["ptg_MicrosoftOffice"]["fields"]["accounts_ptg_microsoftoffice_1_name"] = array (
  'name' => 'accounts_ptg_microsoftoffice_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PTG_MICROSOFTOFFICE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ptg_microsoftoffice_1accounts_ida',
  'link' => 'accounts_ptg_microsoftoffice_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ptg_MicrosoftOffice"]["fields"]["accounts_ptg_microsoftoffice_1accounts_ida"] = array (
  'name' => 'accounts_ptg_microsoftoffice_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ptg_microsoftoffice_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PTG_MICROSOFTOFFICE_1_FROM_PTG_MICROSOFTOFFICE_TITLE',
);


 // created: 2020-06-06 06:03:32
$dictionary['ptg_MicrosoftOffice']['fields']['document_name']['required']=false;
$dictionary['ptg_MicrosoftOffice']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_MicrosoftOffice']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_MicrosoftOffice']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-06 06:05:49
$dictionary['ptg_MicrosoftOffice']['fields']['office_product_type_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOffice']['fields']['office_product_type_c']['labelValue']='Office Product Type';

 

 // created: 2020-06-06 06:03:43
$dictionary['ptg_MicrosoftOffice']['fields']['active_date']['required']=false;
$dictionary['ptg_MicrosoftOffice']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_MicrosoftOffice']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_MicrosoftOffice']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-06 06:11:24
$dictionary['ptg_MicrosoftOffice']['fields']['admin_password_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOffice']['fields']['admin_password_c']['labelValue']='Admin Password';

 

 // created: 2020-06-06 06:14:02
$dictionary['ptg_MicrosoftOffice']['fields']['approval_not_needed_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOffice']['fields']['approval_not_needed_c']['labelValue']='Approval not needed';

 

 // created: 2020-06-06 06:12:03
$dictionary['ptg_MicrosoftOffice']['fields']['approval_requester_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOffice']['fields']['approval_requester_c']['labelValue']='Approval requester';

 

 // created: 2020-06-06 06:10:33
$dictionary['ptg_MicrosoftOffice']['fields']['admin_user_name_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOffice']['fields']['admin_user_name_c']['labelValue']='Admin User Name';

 

 // created: 2020-06-06 06:06:11
$dictionary['ptg_MicrosoftOffice']['fields']['subcription_plan_c']['inline_edit']='1';
$dictionary['ptg_MicrosoftOffice']['fields']['subcription_plan_c']['labelValue']='Subcription Plan';

 
?>