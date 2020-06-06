<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'ptg',
  'author' => 'premieretechgroup',
  'description' => 'premieretechgroup  - Added all 28 Customer Network Profile modules',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'premieretechgroup',
  'published_date' => '2020-06-05 15:08:15',
  'type' => 'module',
  'version' => 1591369695,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'premieretechgroup',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ptg_ActiveDirectory',
      'class' => 'ptg_ActiveDirectory',
      'path' => 'modules/ptg_ActiveDirectory/ptg_ActiveDirectory.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ptg_Antivirus_Server_Information',
      'class' => 'ptg_Antivirus_Server_Information',
      'path' => 'modules/ptg_Antivirus_Server_Information/ptg_Antivirus_Server_Information.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'ptg_Backup_Software',
      'class' => 'ptg_Backup_Software',
      'path' => 'modules/ptg_Backup_Software/ptg_Backup_Software.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'ptg_CitrixServers',
      'class' => 'ptg_CitrixServers',
      'path' => 'modules/ptg_CitrixServers/ptg_CitrixServers.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'ptg_Client_Connectivity',
      'class' => 'ptg_Client_Connectivity',
      'path' => 'modules/ptg_Client_Connectivity/ptg_Client_Connectivity.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'ptg_CloudServiceRequest',
      'class' => 'ptg_CloudServiceRequest',
      'path' => 'modules/ptg_CloudServiceRequest/ptg_CloudServiceRequest.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 'ptg_DataServiceRequest',
      'class' => 'ptg_DataServiceRequest',
      'path' => 'modules/ptg_DataServiceRequest/ptg_DataServiceRequest.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 'ptg_EmployeeCommission',
      'class' => 'ptg_EmployeeCommission',
      'path' => 'modules/ptg_EmployeeCommission/ptg_EmployeeCommission.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 'ptg_Firewall',
      'class' => 'ptg_Firewall',
      'path' => 'modules/ptg_Firewall/ptg_Firewall.php',
      'tab' => true,
    ),
    9 => 
    array (
      'module' => 'ptg_Hosted_Email_Services',
      'class' => 'ptg_Hosted_Email_Services',
      'path' => 'modules/ptg_Hosted_Email_Services/ptg_Hosted_Email_Services.php',
      'tab' => true,
    ),
    10 => 
    array (
      'module' => 'ptg_Hosting_And_Registrar',
      'class' => 'ptg_Hosting_And_Registrar',
      'path' => 'modules/ptg_Hosting_And_Registrar/ptg_Hosting_And_Registrar.php',
      'tab' => true,
    ),
    11 => 
    array (
      'module' => 'ptg_ISP_Information',
      'class' => 'ptg_ISP_Information',
      'path' => 'modules/ptg_ISP_Information/ptg_ISP_Information.php',
      'tab' => true,
    ),
    12 => 
    array (
      'module' => 'ptg_LocalAreaNetworkInformation',
      'class' => 'ptg_LocalAreaNetworkInformation',
      'path' => 'modules/ptg_LocalAreaNetworkInformation/ptg_LocalAreaNetworkInformation.php',
      'tab' => true,
    ),
    13 => 
    array (
      'module' => 'ptg_LocalServiceRequest',
      'class' => 'ptg_LocalServiceRequest',
      'path' => 'modules/ptg_LocalServiceRequest/ptg_LocalServiceRequest.php',
      'tab' => true,
    ),
    14 => 
    array (
      'module' => 'ptg_Local_Admin_Credentials',
      'class' => 'ptg_Local_Admin_Credentials',
      'path' => 'modules/ptg_Local_Admin_Credentials/ptg_Local_Admin_Credentials.php',
      'tab' => true,
    ),
    15 => 
    array (
      'module' => 'ptg_MicrosoftOffice',
      'class' => 'ptg_MicrosoftOffice',
      'path' => 'modules/ptg_MicrosoftOffice/ptg_MicrosoftOffice.php',
      'tab' => true,
    ),
    16 => 
    array (
      'module' => 'ptg_Network_Drives',
      'class' => 'ptg_Network_Drives',
      'path' => 'modules/ptg_Network_Drives/ptg_Network_Drives.php',
      'tab' => true,
    ),
    17 => 
    array (
      'module' => 'ptg_ODBC',
      'class' => 'ptg_ODBC',
      'path' => 'modules/ptg_ODBC/ptg_ODBC.php',
      'tab' => true,
    ),
    18 => 
    array (
      'module' => 'ptg_OnPremise_Email_Services',
      'class' => 'ptg_OnPremise_Email_Services',
      'path' => 'modules/ptg_OnPremise_Email_Services/ptg_OnPremise_Email_Services.php',
      'tab' => true,
    ),
    19 => 
    array (
      'module' => 'ptg_OtherLicensedSoftware',
      'class' => 'ptg_OtherLicensedSoftware',
      'path' => 'modules/ptg_OtherLicensedSoftware/ptg_OtherLicensedSoftware.php',
      'tab' => true,
    ),
    20 => 
    array (
      'module' => 'ptg_OtherServiceRequest',
      'class' => 'ptg_OtherServiceRequest',
      'path' => 'modules/ptg_OtherServiceRequest/ptg_OtherServiceRequest.php',
      'tab' => true,
    ),
    21 => 
    array (
      'module' => 'ptg_OtherUnlicensedSoftware',
      'class' => 'ptg_OtherUnlicensedSoftware',
      'path' => 'modules/ptg_OtherUnlicensedSoftware/ptg_OtherUnlicensedSoftware.php',
      'tab' => true,
    ),
    22 => 
    array (
      'module' => 'ptg_Printers',
      'class' => 'ptg_Printers',
      'path' => 'modules/ptg_Printers/ptg_Printers.php',
      'tab' => true,
    ),
    23 => 
    array (
      'module' => 'ptg_QuickBooks',
      'class' => 'ptg_QuickBooks',
      'path' => 'modules/ptg_QuickBooks/ptg_QuickBooks.php',
      'tab' => true,
    ),
    24 => 
    array (
      'module' => 'ptg_RemoteAccessInformation',
      'class' => 'ptg_RemoteAccessInformation',
      'path' => 'modules/ptg_RemoteAccessInformation/ptg_RemoteAccessInformation.php',
      'tab' => true,
    ),
    25 => 
    array (
      'module' => 'ptg_Resources',
      'class' => 'ptg_Resources',
      'path' => 'modules/ptg_Resources/ptg_Resources.php',
      'tab' => true,
    ),
    26 => 
    array (
      'module' => 'ptg_RouterInformation',
      'class' => 'ptg_RouterInformation',
      'path' => 'modules/ptg_RouterInformation/ptg_RouterInformation.php',
      'tab' => true,
    ),
    27 => 
    array (
      'module' => 'ptg_Services',
      'class' => 'ptg_Services',
      'path' => 'modules/ptg_Services/ptg_Services.php',
      'tab' => true,
    ),
    28 => 
    array (
      'module' => 'ptg_SharePoint',
      'class' => 'ptg_SharePoint',
      'path' => 'modules/ptg_SharePoint/ptg_SharePoint.php',
      'tab' => true,
    ),
    29 => 
    array (
      'module' => 'ptg_SQL_Server',
      'class' => 'ptg_SQL_Server',
      'path' => 'modules/ptg_SQL_Server/ptg_SQL_Server.php',
      'tab' => true,
    ),
    30 => 
    array (
      'module' => 'ptg_Switches',
      'class' => 'ptg_Switches',
      'path' => 'modules/ptg_Switches/ptg_Switches.php',
      'tab' => true,
    ),
    31 => 
    array (
      'module' => 'ptg_ThirdPartyContactInformation',
      'class' => 'ptg_ThirdPartyContactInformation',
      'path' => 'modules/ptg_ThirdPartyContactInformation/ptg_ThirdPartyContactInformation.php',
      'tab' => true,
    ),
    32 => 
    array (
      'module' => 'ptg_TroubleTicket',
      'class' => 'ptg_TroubleTicket',
      'path' => 'modules/ptg_TroubleTicket/ptg_TroubleTicket.php',
      'tab' => true,
    ),
    33 => 
    array (
      'module' => 'ptg_TroubleTicketEmployeeCommission',
      'class' => 'ptg_TroubleTicketEmployeeCommission',
      'path' => 'modules/ptg_TroubleTicketEmployeeCommission/ptg_TroubleTicketEmployeeCommission.php',
      'tab' => true,
    ),
    34 => 
    array (
      'module' => 'ptg_TroubleTicketVendorCommission',
      'class' => 'ptg_TroubleTicketVendorCommission',
      'path' => 'modules/ptg_TroubleTicketVendorCommission/ptg_TroubleTicketVendorCommission.php',
      'tab' => true,
    ),
    35 => 
    array (
      'module' => 'ptg_VendorCommission',
      'class' => 'ptg_VendorCommission',
      'path' => 'modules/ptg_VendorCommission/ptg_VendorCommission.php',
      'tab' => true,
    ),
    36 => 
    array (
      'module' => 'ptg_VoiceServiceRequest',
      'class' => 'ptg_VoiceServiceRequest',
      'path' => 'modules/ptg_VoiceServiceRequest/ptg_VoiceServiceRequest.php',
      'tab' => true,
    ),
    37 => 
    array (
      'module' => 'ptg_WebServerIntranet',
      'class' => 'ptg_WebServerIntranet',
      'path' => 'modules/ptg_WebServerIntranet/ptg_WebServerIntranet.php',
      'tab' => true,
    ),
    38 => 
    array (
      'module' => 'ptg_WirelessInformation',
      'class' => 'ptg_WirelessInformation',
      'path' => 'modules/ptg_WirelessInformation/ptg_WirelessInformation.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_ActiveDirectory',
      'to' => 'modules/ptg_ActiveDirectory',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Antivirus_Server_Information',
      'to' => 'modules/ptg_Antivirus_Server_Information',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Backup_Software',
      'to' => 'modules/ptg_Backup_Software',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_CitrixServers',
      'to' => 'modules/ptg_CitrixServers',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Client_Connectivity',
      'to' => 'modules/ptg_Client_Connectivity',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_CloudServiceRequest',
      'to' => 'modules/ptg_CloudServiceRequest',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_DataServiceRequest',
      'to' => 'modules/ptg_DataServiceRequest',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_EmployeeCommission',
      'to' => 'modules/ptg_EmployeeCommission',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Firewall',
      'to' => 'modules/ptg_Firewall',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Hosted_Email_Services',
      'to' => 'modules/ptg_Hosted_Email_Services',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Hosting_And_Registrar',
      'to' => 'modules/ptg_Hosting_And_Registrar',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_ISP_Information',
      'to' => 'modules/ptg_ISP_Information',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_LocalAreaNetworkInformation',
      'to' => 'modules/ptg_LocalAreaNetworkInformation',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_LocalServiceRequest',
      'to' => 'modules/ptg_LocalServiceRequest',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Local_Admin_Credentials',
      'to' => 'modules/ptg_Local_Admin_Credentials',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_MicrosoftOffice',
      'to' => 'modules/ptg_MicrosoftOffice',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Network_Drives',
      'to' => 'modules/ptg_Network_Drives',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_ODBC',
      'to' => 'modules/ptg_ODBC',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_OnPremise_Email_Services',
      'to' => 'modules/ptg_OnPremise_Email_Services',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_OtherLicensedSoftware',
      'to' => 'modules/ptg_OtherLicensedSoftware',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_OtherServiceRequest',
      'to' => 'modules/ptg_OtherServiceRequest',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_OtherUnlicensedSoftware',
      'to' => 'modules/ptg_OtherUnlicensedSoftware',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Printers',
      'to' => 'modules/ptg_Printers',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_QuickBooks',
      'to' => 'modules/ptg_QuickBooks',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_RemoteAccessInformation',
      'to' => 'modules/ptg_RemoteAccessInformation',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Resources',
      'to' => 'modules/ptg_Resources',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_RouterInformation',
      'to' => 'modules/ptg_RouterInformation',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Services',
      'to' => 'modules/ptg_Services',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_SharePoint',
      'to' => 'modules/ptg_SharePoint',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_SQL_Server',
      'to' => 'modules/ptg_SQL_Server',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Switches',
      'to' => 'modules/ptg_Switches',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_ThirdPartyContactInformation',
      'to' => 'modules/ptg_ThirdPartyContactInformation',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_TroubleTicket',
      'to' => 'modules/ptg_TroubleTicket',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_TroubleTicketEmployeeCommission',
      'to' => 'modules/ptg_TroubleTicketEmployeeCommission',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_TroubleTicketVendorCommission',
      'to' => 'modules/ptg_TroubleTicketVendorCommission',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_VendorCommission',
      'to' => 'modules/ptg_VendorCommission',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_VoiceServiceRequest',
      'to' => 'modules/ptg_VoiceServiceRequest',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_WebServerIntranet',
      'to' => 'modules/ptg_WebServerIntranet',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_WirelessInformation',
      'to' => 'modules/ptg_WirelessInformation',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);