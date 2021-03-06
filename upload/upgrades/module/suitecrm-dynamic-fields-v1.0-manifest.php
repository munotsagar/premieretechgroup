<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
/* * *******************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 * ****************************************************************************** */


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array(
    'acceptable_sugar_versions' => array('regex_matches' => array(0 => '6\.*'),),
    'acceptable_sugar_flavors' => array(0 => 'CE', 1 => 'PRO', 2 => 'ENT',),
    'readme' => '',
    'key' => 'DF',
    'author' => 'Midland Web Company www.midlandwebcompany.com',
    'description' => 'Purpose of the module is to have as many fields as require instead of a static of fields on runtime.',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'DynamicFields',
    'published_date' => '2015-08-15 11:11:49',
    'type' => 'module',
    'version' => '1.0.0',
    'remove_tables' => 'prompt',
);


$installdefs = array(
    'id' => 'DynamicFields',
    'beans' =>
    array(
        0 =>
        array(
            'module' => 'DF_DynamicFields',
            'class' => 'DF_DynamicFields',
            'path' => 'modules/DF_DynamicFields/DF_DynamicFields.php',
            'tab' => false,
        ),
    ),
    'layoutdefs' =>
    array(
    ),
    'relationships' =>
    array(
    ),
    'image_dir' => '<basepath>/icons',
    'copy' =>
    array(
        0 =>
        array(
            'from' => '<basepath>/SugarModules/modules/DF_DynamicFields',
            'to' => 'modules/DF_DynamicFields',
        ),
        1 =>
        array(
            'from' => '<basepath>/custom/modules/DF_DynamicFields',
            'to' => 'custom/modules/DF_DynamicFields',
        ),
        2 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration',
        ),
    ),
    'logic_hooks' => array(
        array(
            'module' => '',
            'hook' => 'after_login',
            'order' => 23,
            'description' => 'Load saved Dynamic Fields',
            'file' => 'custom/modules/DF_DynamicFields/dfDynamicFieldLoad.php',
            'class' => 'dfDynamicFieldLoad',
            'function' => 'DynamicFieldsLoad',
        ),
        array(
            'module' => '',
            'hook' => 'after_ui_frame',
            'order' => 24,
            'description' => 'Script for handling dynamic fields.',
            'file' => 'custom/modules/DF_DynamicFields/dfDynamicFieldScript.php',
            'class' => 'dfDynamicFieldScript',
            'function' => 'DynamicFieldsScript',
        ),
        array(
            'module' => 'DF_DynamicFields',
            'hook' => 'after_save',
            'order' => 25,
            'description' => 'Dynamic Fields Script',
            'file' => 'custom/modules/DF_DynamicFields/dfDynamicFieldAddNew.php',
            'class' => 'dfDynamicFieldAddNew',
            'function' => 'DynamicFieldsAddNew',
        ),
    ),
    'language' =>
    array(
        0 =>
        array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
        1 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.DF_DynamicFields.php',
            'to_module' => 'Administration',
            'language' => 'en_us',
        ),
    ),
);
