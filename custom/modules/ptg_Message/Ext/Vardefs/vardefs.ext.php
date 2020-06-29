<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-24 07:35:30
$dictionary["ptg_Message"]["fields"]["aos_quotes_ptg_message_1"] = array (
  'name' => 'aos_quotes_ptg_message_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_ptg_message_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_PTG_MESSAGE_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_ptg_message_1aos_quotes_ida',
);
$dictionary["ptg_Message"]["fields"]["aos_quotes_ptg_message_1_name"] = array (
  'name' => 'aos_quotes_ptg_message_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_PTG_MESSAGE_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_ptg_message_1aos_quotes_ida',
  'link' => 'aos_quotes_ptg_message_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["ptg_Message"]["fields"]["aos_quotes_ptg_message_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_ptg_message_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_ptg_message_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_PTG_MESSAGE_1_FROM_PTG_MESSAGE_TITLE',
);


 // created: 2020-06-28 14:13:13
$dictionary['ptg_Message']['fields']['select_user_c']['inline_edit']='1';
$dictionary['ptg_Message']['fields']['select_user_c']['labelValue']='Select Vendor';

 

 // created: 2020-06-08 18:15:43
$dictionary['ptg_Message']['fields']['document_name']['required']=false;
$dictionary['ptg_Message']['fields']['document_name']['inline_edit']=true;
$dictionary['ptg_Message']['fields']['document_name']['merge_filter']='disabled';
$dictionary['ptg_Message']['fields']['document_name']['unified_search']=false;

 

 // created: 2020-06-08 18:07:09
$dictionary['ptg_Message']['fields']['date_modified']['help']='';

 

 // created: 2020-06-08 18:20:57
$dictionary['ptg_Message']['fields']['status_id']['inline_edit']=true;
$dictionary['ptg_Message']['fields']['status_id']['options']='status_0';
$dictionary['ptg_Message']['fields']['status_id']['merge_filter']='disabled';
$dictionary['ptg_Message']['fields']['status_id']['reportable']=true;

 

 // created: 2020-06-28 14:18:18
$dictionary['ptg_Message']['fields']['select_employee_c']['inline_edit']='1';
$dictionary['ptg_Message']['fields']['select_employee_c']['labelValue']='Select Employee';

 

 // created: 2020-06-08 18:14:16
$dictionary['ptg_Message']['fields']['status']['type']='enum';
$dictionary['ptg_Message']['fields']['status']['inline_edit']=true;
$dictionary['ptg_Message']['fields']['status']['options']='status_0';
$dictionary['ptg_Message']['fields']['status']['help']='Status';
$dictionary['ptg_Message']['fields']['status']['comments']='Status';
$dictionary['ptg_Message']['fields']['status']['merge_filter']='disabled';

 

 // created: 2020-06-08 18:03:05
$dictionary['ptg_Message']['fields']['user_id_c']['inline_edit']=1;

 

 // created: 2020-06-24 07:32:08
$dictionary['ptg_Message']['fields']['attach_documents_c']['inline_edit']='1';
$dictionary['ptg_Message']['fields']['attach_documents_c']['labelValue']='Attach Documents';

 

 // created: 2020-06-08 18:18:58
$dictionary['ptg_Message']['fields']['active_date']['required']=false;
$dictionary['ptg_Message']['fields']['active_date']['inline_edit']=true;
$dictionary['ptg_Message']['fields']['active_date']['merge_filter']='disabled';
$dictionary['ptg_Message']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2020-06-28 14:18:18
$dictionary['ptg_Message']['fields']['user_id1_c']['inline_edit']=1;

 

 // created: 2020-06-25 17:04:56
$dictionary['ptg_Message']['fields']['date_time_c']['inline_edit']='1';
$dictionary['ptg_Message']['fields']['date_time_c']['labelValue']='Date  & Time';

 

 // created: 2020-06-08 18:03:54
$dictionary['ptg_Message']['fields']['description']['inline_edit']=true;
$dictionary['ptg_Message']['fields']['description']['help']='Message';
$dictionary['ptg_Message']['fields']['description']['comments']='Full text of the note';
$dictionary['ptg_Message']['fields']['description']['merge_filter']='disabled';

 

 // created: 2020-06-25 17:09:44
$dictionary['ptg_Message']['fields']['date_time1_c']['inline_edit']='1';
$dictionary['ptg_Message']['fields']['date_time1_c']['labelValue']='Date & Time1';

 
?>