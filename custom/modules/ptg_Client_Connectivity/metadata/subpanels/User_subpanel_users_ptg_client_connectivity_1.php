<?php
// created: 2020-07-18 21:04:06
$subpanel_layout['list_fields'] = array (
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
  'eas_port_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EAS_PORT',
    'width' => '10%',
  ),
  'exchange_ssl_tls_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_EXCHANGE_SSL_TLS',
    'width' => '10%',
  ),
  'smtp_outgoing_mail_server_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SMTP_OUTGOING_MAIL_SERVER',
    'width' => '10%',
  ),
  'other_email_client_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_OTHER_EMAIL_CLIENT',
    'width' => '10%',
  ),
  'imapincomingmailserver_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IMAPINCOMINGMAILSERVER',
    'width' => '10%',
  ),
  'pop_ssl_tls_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_POP_SSL_TLS',
    'width' => '10%',
  ),
  'smtp_ssl_tls_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_SMTP_SSL_TLS',
    'width' => '10%',
  ),
  'supported_protocols_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SUPPORTED_PROTOCOLS',
    'width' => '10%',
  ),
  'imap_ssl_tls_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_IMAP_SSL_TLS',
    'width' => '10%',
  ),
  'imap_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_IMAP',
    'width' => '10%',
  ),
  'imap_port_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_IMAP_PORT ',
    'width' => '10%',
  ),
  'pop_port_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_POP_PORT',
    'width' => '10%',
  ),
  'smtp_port_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SMTP_PORT',
    'width' => '10%',
  ),
  'eas_server_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EAS_SERVER_NAME',
    'width' => '10%',
  ),
  'exchangeactivesync_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_EXCHANGEACTIVESYNC',
    'width' => '10%',
  ),
  'pop_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_POP',
    'width' => '10%',
  ),
  'popincomingmailserver_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_POPINCOMINGMAILSERVER',
    'width' => '10%',
  ),
  'browser_own_url_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_BROWSER_OWN_URL',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'width' => '4%',
    'vname' => 'LBL_EDIT_BUTTON',
    'default' => true,
    'widget_class' => 'SubPanelEditButton',
  ),
  'remove_button' => 
  array (
    'width' => '5%',
    'vname' => 'LBL_REMOVE',
    'default' => true,
    'widget_class' => 'SubPanelRemoveButton',
  ),
);