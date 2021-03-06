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
  'description' => 'premieretechgroup  - Added Trouble Ticket Employee Commission, Trouble Ticket Vendor Commission modules',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'premieretechgroup',
  'published_date' => '2020-06-04 14:22:09',
  'type' => 'module',
  'version' => 1591280529,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'premieretechgroup',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ptg_CloudServiceRequest',
      'class' => 'ptg_CloudServiceRequest',
      'path' => 'modules/ptg_CloudServiceRequest/ptg_CloudServiceRequest.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ptg_DataServiceRequest',
      'class' => 'ptg_DataServiceRequest',
      'path' => 'modules/ptg_DataServiceRequest/ptg_DataServiceRequest.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'ptg_EmployeeCommission',
      'class' => 'ptg_EmployeeCommission',
      'path' => 'modules/ptg_EmployeeCommission/ptg_EmployeeCommission.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'ptg_LocalServiceRequest',
      'class' => 'ptg_LocalServiceRequest',
      'path' => 'modules/ptg_LocalServiceRequest/ptg_LocalServiceRequest.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'ptg_OtherServiceRequest',
      'class' => 'ptg_OtherServiceRequest',
      'path' => 'modules/ptg_OtherServiceRequest/ptg_OtherServiceRequest.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'ptg_Services',
      'class' => 'ptg_Services',
      'path' => 'modules/ptg_Services/ptg_Services.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 'ptg_TroubleTicket',
      'class' => 'ptg_TroubleTicket',
      'path' => 'modules/ptg_TroubleTicket/ptg_TroubleTicket.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 'ptg_TroubleTicketEmployeeCommission',
      'class' => 'ptg_TroubleTicketEmployeeCommission',
      'path' => 'modules/ptg_TroubleTicketEmployeeCommission/ptg_TroubleTicketEmployeeCommission.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 'ptg_TroubleTicketVendorCommission',
      'class' => 'ptg_TroubleTicketVendorCommission',
      'path' => 'modules/ptg_TroubleTicketVendorCommission/ptg_TroubleTicketVendorCommission.php',
      'tab' => true,
    ),
    9 => 
    array (
      'module' => 'ptg_VendorCommission',
      'class' => 'ptg_VendorCommission',
      'path' => 'modules/ptg_VendorCommission/ptg_VendorCommission.php',
      'tab' => true,
    ),
    10 => 
    array (
      'module' => 'ptg_VoiceServiceRequest',
      'class' => 'ptg_VoiceServiceRequest',
      'path' => 'modules/ptg_VoiceServiceRequest/ptg_VoiceServiceRequest.php',
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
      'from' => '<basepath>/SugarModules/modules/ptg_CloudServiceRequest',
      'to' => 'modules/ptg_CloudServiceRequest',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_DataServiceRequest',
      'to' => 'modules/ptg_DataServiceRequest',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_EmployeeCommission',
      'to' => 'modules/ptg_EmployeeCommission',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_LocalServiceRequest',
      'to' => 'modules/ptg_LocalServiceRequest',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_OtherServiceRequest',
      'to' => 'modules/ptg_OtherServiceRequest',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_Services',
      'to' => 'modules/ptg_Services',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_TroubleTicket',
      'to' => 'modules/ptg_TroubleTicket',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_TroubleTicketEmployeeCommission',
      'to' => 'modules/ptg_TroubleTicketEmployeeCommission',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_TroubleTicketVendorCommission',
      'to' => 'modules/ptg_TroubleTicketVendorCommission',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_VendorCommission',
      'to' => 'modules/ptg_VendorCommission',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ptg_VoiceServiceRequest',
      'to' => 'modules/ptg_VoiceServiceRequest',
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