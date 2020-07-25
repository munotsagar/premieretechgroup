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


class ptg_TroubleTicketViewEdit extends ViewEdit
{	

	
    public function __construct()
    {	
        parent::__construct();
         $this->useForSubpanel = true;
         $this->useModuleQuickCreateTemplate = true;	
		
    }

    public function display()
    {
        global $current_user; 
		$category = $current_user->user_category_c;

?>

<input type="hidden" id="category" value="<?php echo $category;?>">
<script type="text/javascript">
	$(document).ready(function(){
		// var category = $("#category").val();
		// $("#detailpanel_1").parent().attr("style","display:none;");
		// if (category != 'Vendor') {
		// 	$("#detailpanel_1").parent().attr("style","display:block"); 

		// }

        var onclicksave = $("input[title='Save']").attr("onclick");
        $("input[title='Save']").removeAttr("onclick");

        $("input[title='Save']").click(function(){

            if($("#request_new_c").prop("checked") == true) 
            {
               if($("#request_new_dropdown_c").val() == 0)
                {
                    alert("Please select Request New!");
                    return false;
                }
            }

            if($("#reporting_trouble_ticket_c").prop("checked") == true) { 
                    
                    if($("#user_name_c").val()=="" && $("#password_c").val()=="")
                    {
                        alert("User Name and Password should not be blank!");
                        return false;
                    }

                    if(($("#teamviewer_id_c").val()!="" && $("#password6_c").val()!="") || 
                        ($("#any_desk_id_c").val()!="" && $("#password2_c").val()!="") || 
                        ($("#solarwinds_id_c").val()!="" && $("#password5_c").val()!="") || 
                        ($("#ninja_id_c").val()!="" && $("#password9_c").val()!="") || 
                        ($("#connectwise_id_c").val()!="" && $("#password7_c").val()!="") || 
                        ($("#continuum_id_c").val()!="" && $("#password4_c").val()!="") || 
                        ($("#logmein_id_c").val()!="" && $("#password3_c").val()!="") || 
                        ($("#gotomypc_id_c").val()!="" && $("#password8_c").val()!="") || 
                        ($("#other_id_c").val()!="" && $("#password10_c").val()!=""))
                    {
                        
                    } else{
                        alert("Please select one of the ID & Password from TeamViewer ID and Other ID");
                        return false;
                    }
            }

            if($("#reset_password_c").prop("checked") == true) { 

                if($("#reset_password_dropdown_c").val() == 0)
                {
                    alert("Please select Reset Password!");
                    return false;
                }
            }
            
            var _form = document.getElementById('EditView'); 
            _form.action.value='Save'; 
            if(check_form('EditView')){SUGAR.ajaxUI.submitForm(_form);}
            return false;
        });
   });
	
</script>

<?php
        parent::display();
    }
}
?>