<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 */

require_once('include/MVC/View/views/view.detail.php');

class AOS_QuotesViewDetail extends ViewDetail
{
    public function __construct()
    {

        parent::__construct();
    }


    /**
     * display
     * Override the display method to support customization for the buttons that display
     * a popup and allow you to copy the account's address into the selected contacts.
     * The custom_code_billing and custom_code_shipping Smarty variables are found in
     * include/SugarFields/Fields/Address/DetailView.tpl (default).  If it's a English U.S.
     * locale then it'll use file include/SugarFields/Fields/Address/en_us.DetailView.tpl.
     */
    public function display()
    {
    	 global $current_user, $app_list_strings;

         // echo "<pre>";
         // print_r($current_user->user_category_c);
         // //echo $this->bean->assigned_user_id;
         // echo "</pre>";

         $myUser = new User();
        $myUser->retrieve($this->bean->assigned_user_id);
        $full_name = $myUser->full_name;

        $assignEmployee = '';
        $assignVendor = '';
        $assignManager = '';
         if($current_user->user_category_c == "Employee")
         {
         		$employeeStatusCnt = count($app_list_strings['employee_status_list']);
        		$employeeStatus = $app_list_strings['employee_status_list'];
        		$employee_status_c = $this->bean->employee_status_c;
         		$selectEmployeeStatus = '<select name="employee_custom_status_c" quoteid ="'.$this->bean->id.'" id="employee_custom_status_c">';

         		foreach ($employeeStatus as $key => $value) {
         			# code...
         			$selected = ($employee_status_c == $key)?'selected':'';
         			$selectEmployeeStatus.='<option '.$selected.' value="'.$key.'">'.$value.'</option>';
         		}
         		$selectEmployeeStatus.='</select>';

               $assignEmployee = '<div class="panel panel-default"><div class="panel-heading "><a class="" role="button" data-toggle="collapse" href="#top-panel-5" aria-expanded="false"><div class="col-xs-10 col-sm-11 col-md-11">Status</div></a></div><br><div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-5" data-id="LBL_EDITVIEW_PANEL5"><div class="tab-content"><div id="assignId"><table><tr><td>Employee Status : </td><td>'.$selectEmployeeStatus.'</td></tr></table></div></div></div></div><br><button userid = "'.$current_user->id.'" quoteid ="'.$this->bean->id.'" name="custom_assign_to" class="button" id = "custom_assign_to"> Quote Assign Me</button>&nbsp;&nbsp;&nbsp;<button userid = "'.$current_user->id.'" quoteid ="'.$this->bean->id.'"  name="custom_unassign_to" id = "custom_unassign_to" class="button"> Quote Unassign Me</button>';

         }
         if($current_user->user_category_c == "Vendor")
         {
         		$vendorStatusCnt = count($app_list_strings['vendor_status_list']);
        		$vendorStatus = $app_list_strings['vendor_status_list'];
        		$vendor_status_c = $this->bean->vendor_status_c;
         		$selectVendorStatus = '<select name="vendor_custom_status_c" quoteid ="'.$this->bean->id.'" id="vendor_custom_status_c">';

         		foreach ($vendorStatus as $key => $value) {
         			# code...
         			$selected = ($vendor_status_c == $key)?'selected':'';
         			$selectVendorStatus.='<option '.$selected.' value="'.$key.'">'.$value.'</option>';
         		}
         		$selectVendorStatus.='</select>';

               $assignVendor = '<div class="panel panel-default"><div class="panel-heading "><a class="" role="button" data-toggle="collapse" href="#top-panel-5" aria-expanded="false"><div class="col-xs-10 col-sm-11 col-md-11">Status</div>/a></div><div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-5" data-id="LBL_EDITVIEW_PANEL5"><div class="tab-content"><div id="assignId"><table><tr><td>Vendor Status : </td><td>'.$selectVendorStatus.'</td></tr></table></div></div></div></div>';
         }
         if($current_user->user_category_c == "Manager" || $current_user->user_category_c == "Super_User")
         {
         		$managerStatusCnt = count($app_list_strings['manager_status_list']);
        		$managerStatus = $app_list_strings['manager_status_list'];
        		$manager_status_c = $this->bean->manager_status_c;
         		$selectManagerStatus = '<select name="manager_custom_status_c" quoteid ="'.$this->bean->id.'" id="manager_custom_status_c">';

         		foreach ($managerStatus as $key => $value) {
         			# code...
         			$selected = ($manager_status_c == $key)?'selected':'';
         			$selectManagerStatus.='<option '.$selected.' value="'.$key.'">'.$value.'</option>';
         		}
         		$selectManagerStatus.='</select>';

               $assignManager = '<div class="panel panel-default"><div class="panel-heading ">
			                <a class="" role="button" data-toggle="collapse" href="#top-panel-5" aria-expanded="false"><div class="col-xs-10 col-sm-11 col-md-11">Status</div></a></div><div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-5" data-id="LBL_EDITVIEW_PANEL5"><div class="tab-content"><div id="assignId"><table><tr><td>Manager Status : </td><td>'.$selectManagerStatus.'</td></tr></table></div></div></div></div>';
         }
         ?>
        <input type="hidden" name="user_category_c" id="user_category_c" value="<?php echo $current_user->user_category_c;?>">
        <script type="text/javascript" src="custom/modules/AOS_Quotes/js/detail.js"></script>

        <?php
         parent::display();

         	if($assignEmployee!="")
         	{
         		?>
		         <script type="text/javascript">
		         	$("#top-panel-0").parent().before('<?php echo $assignEmployee;?>');
		         </script>
		         <?php
         	}
         	if($assignVendor!="")
         	{
         		?>
		         <script type="text/javascript">
		         	$("#top-panel-0").parent().before('<?php echo $assignVendor;?>');
		         </script>
		         <?php
         	}
         	if($assignManager!="")
         	{
         		?>
		         <script type="text/javascript">
		         	$("#top-panel-0").parent().before('<?php echo $assignManager;?>');
		         </script>
		         <?php
         	}

         
        /*echo $assignEmployee;
        echo $assignVendor;
        echo $assignManager;*/
    }
}
