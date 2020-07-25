<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

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


class ptg_OtherUnlicensedSoftwareViewEdit extends ViewEdit
{   

    
    public function __construct()
    {   
        parent::__construct();
         $this->useForSubpanel = true;
         $this->useModuleQuickCreateTemplate = true;
    }

    public function display()
    {
        global $current_user, $app_list_strings;
        // echo $app_list_strings['requires_approval_list'];
        // exit();
        $serviceCnt = count($app_list_strings['requires_approval_list']);
        $servicesDropDown = $app_list_strings['requires_approval_list'];
        // echo $serviceCnt;
        // echo $servicesDropDown;
        $this->bean->requires_approval_c = str_replace('^', '', $this->bean->requires_approval_c);
        $requires_approval_c = explode(",", $this->bean->requires_approval_c);
        if($serviceCnt > 0) {
            $i = 0;
            $checkboxes.= '<div style="display:none;" id = "serviceCheckboxes">';
            foreach ($servicesDropDown as $key => $value) {
                $serviceId = str_replace(" ", "_", $value);
                if($requires_approval_c[$i] == $key) {
                    $jsCode.='$("#'.strtolower($serviceId).'_c").parent().parent().next().show();
        $("#'.strtolower($serviceId).'_c").parent().parent().show();';
                } else {
                     $jsCode.='$("#'.strtolower($serviceId).'_c").parent().parent().next().hide();
        $("#'.strtolower($serviceId).'_c").parent().parent().hide();';
                }

                $checked = ($requires_approval_c[$i] == $key)?'checked="cheched"':'';
               $checkboxes.= '<label><input '.$checked.' type="checkbox" name="requires_approval_c[]" id = "'.$serviceId.'" value="'.$key.'"> '.$value.'</label><br><br>';

               $i++;
            }
            $checkboxes.= '</div><script>$(document).ready(function(){'.$jsCode.'});</script>';
        }
        echo $checkboxes;


        
?>


<?php
        parent::display();
    }
}
