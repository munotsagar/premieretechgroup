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


class ptg_ActiveDirectoryViewEdit extends ViewEdit
{	

	
    public function __construct()
    {	
        parent::__construct();
         $this->useForSubpanel = true;
         $this->useModuleQuickCreateTemplate = true;	
		
    }

    public function display()
    {
        $ou_template_c = explode(", ", $this->bean->ou_template_c);
        $field = '';
        $fildOne = '';
        if(count($ou_template_c) > 0){
            $i = 0;
            foreach($ou_template_c as $key => $value){
                if($i == 0) {
                    $fildOne.='<input type="text" name="product_name[]" value="'.$value.'">';
                } else {
                    $fild.='<div><input value="'.$value.'" type="text" name="product_name[]"/><a href="#" class="remove_field" style="margin-left:10px;">Remove</a></div>';
                }
                
                $i++;
            }
            //print_r($ou_template_c);
        } else {
            $fildOne = '<input type="text" name="product_name[]">';
        }
?>

<script type="text/javascript">
    $(document).ready(function() {
    //alert("I am Here....");
	    $("#ou_template_c").parent().html('<div class="input_fields_container"><div><?php echo $fildOne;?><button class="btn btn-sm btn-primary add_more_button">Add More Fields</button></div><?php echo $fild;?></div>');    
	    var max_fields_limit      = 10; //set limit for maximum input fields
	    var x = 1; //initialize counter for text box
	    $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
	        e.preventDefault();
	        if(x < max_fields_limit){ //check conditions
	            x++; //counter increment
	            $('.input_fields_container').append('<div><input type="text" name="product_name[]"/><a href="#" class="remove_field" style="margin-left:10px;">Remove</a></div>'); //add input field
	        }
	    });  
	    $('.input_fields_container').on("click",".remove_field", function(e){ //user click on remove text links
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
    
});
</script>

<script type="text/javascript" src="custom/modules/ptg_ActiveDirectory/js/script.js"></script>

<?php
        parent::display();

        
    }
}
?>