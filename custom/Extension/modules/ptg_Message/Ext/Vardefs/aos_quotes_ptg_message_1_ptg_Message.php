<?php
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
