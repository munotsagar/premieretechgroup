<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2020-06-05 13:49:18
$dictionary['ptg_Client_Connectivity']['fields']['eas_port_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['eas_port_c']['labelValue']='Exchange Port #';

 

 // created: 2020-06-05 13:12:24
$dictionary['ptg_Client_Connectivity']['fields']['supported_protocols_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['supported_protocols_c']['labelValue']='Supported Protocols';

 

 // created: 2020-06-05 13:31:00
$dictionary['ptg_Client_Connectivity']['fields']['exchange_ssl_tls_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['exchange_ssl_tls_c']['labelValue']='Exchange SSL / TLS';

 

 // created: 2020-06-05 13:22:42
$dictionary['ptg_Client_Connectivity']['fields']['smtp_outgoing_mail_server_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['smtp_outgoing_mail_server_c']['labelValue']='SMTP Outgoing Mail Server';

 

 // created: 2020-06-05 13:14:14
$dictionary['ptg_Client_Connectivity']['fields']['imapincomingmailserver_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['imapincomingmailserver_c']['labelValue']='IMAP Incoming Mail Server';

 

 // created: 2020-06-05 13:23:49
$dictionary['ptg_Client_Connectivity']['fields']['smtp_ssl_tls_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['smtp_ssl_tls_c']['labelValue']='SMTP SSL/TLS';

 

 // created: 2020-06-05 13:20:38
$dictionary['ptg_Client_Connectivity']['fields']['pop_ssl_tls_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['pop_ssl_tls_c']['labelValue']='POP SSL/TLS';

 

 // created: 2020-06-05 13:17:16
$dictionary['ptg_Client_Connectivity']['fields']['imap_ssl_tls_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['imap_ssl_tls_c']['labelValue']='IMAP SSL/TLS';

 

 // created: 2020-06-05 13:16:12
$dictionary['ptg_Client_Connectivity']['fields']['imap_port_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['imap_port_c']['labelValue']='IMAP Port #';

 

 // created: 2020-06-05 13:20:01
$dictionary['ptg_Client_Connectivity']['fields']['pop_port_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['pop_port_c']['labelValue']='POP Port #';

 

 // created: 2020-06-05 13:58:19
$dictionary['ptg_Client_Connectivity']['fields']['imap_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['imap_c']['labelValue']='IMAP';

 

 // created: 2020-06-05 13:23:11
$dictionary['ptg_Client_Connectivity']['fields']['smtp_port_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['smtp_port_c']['labelValue']='SMTP Port #';

 

 // created: 2020-06-05 13:29:17
$dictionary['ptg_Client_Connectivity']['fields']['eas_server_name_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['eas_server_name_c']['labelValue']='EAS Server name';

 

 // created: 2020-06-05 13:58:00
$dictionary['ptg_Client_Connectivity']['fields']['smtp_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['smtp_c']['labelValue']='SMTP';

 

 // created: 2020-06-05 13:59:13
$dictionary['ptg_Client_Connectivity']['fields']['exchangeactivesync_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['exchangeactivesync_c']['labelValue']='Exchange Active Sync (EAS)';

 

 // created: 2020-06-05 13:54:23
$dictionary['ptg_Client_Connectivity']['fields']['email_client_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['email_client_c']['labelValue']='Email Client';

 

 // created: 2020-06-05 13:18:32
$dictionary['ptg_Client_Connectivity']['fields']['popincomingmailserver_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['popincomingmailserver_c']['labelValue']='POP: Incoming Mail Server';

 

 // created: 2020-06-05 13:57:45
$dictionary['ptg_Client_Connectivity']['fields']['pop_c']['inline_edit']='1';
$dictionary['ptg_Client_Connectivity']['fields']['pop_c']['labelValue']='POP';

 

 // created: 2020-06-05 13:54:52
$dictionary['ptg_Client_Connectivity']['fields']['name']['required']=false;
$dictionary['ptg_Client_Connectivity']['fields']['name']['inline_edit']=true;
$dictionary['ptg_Client_Connectivity']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ptg_Client_Connectivity']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['ptg_Client_Connectivity']['fields']['name']['merge_filter']='disabled';
$dictionary['ptg_Client_Connectivity']['fields']['name']['unified_search']=false;

 
?>