<?php

require_once('include/EditView/SubpanelQuickCreate.php');

class ptg_MessageSubpanelQuickCreate extends SubpanelQuickCreate
{
    public function preDisplay(){
    parent::preDisplay();
    echo "view.quickcreate.php";
    if (isset($_REQUEST['parent_id']) && $_REQUEST['parent_id'] != '' && isset($_REQUEST['parent_type']) &&  $_REQUEST['parent_type'] == 'Contacts'){
         $cont = new Contact();
         $cont->retrieve($_REQUEST['parent_id']);
         //say the fields are company_id and company_name in Companies
         //and company_id_c and company_name_c in Contracts
         //assuming company is a relate field you'll need to map both
         $_REQUEST['contact_id_c'] = $cont->contact_id;
         $_REQUEST['contact_c'] = $cont->contact_name;
    }
  }
  
    public function ptg_MessageSubpanelQuickCreate(){
        global $db, $current_user;

        if($_REQUEST['aos_quotes_id']!="") {
            $this->user_id_c = 1;
            //echo "<pre>";
            //print_r($_REQUEST);//echo "</pre>";

            $aos_quotes_id = $_REQUEST['aos_quotes_id'];
            $quotesObj = BeanFactory::getBean('AOS_Quotes', $aos_quotes_id);

            $this->select_user_c =  $quotesObj->assigned_user_id;
            //print_r($quotesObj);echo "</pre>";
            //exit;
            $created_by = $quotesObj->created_by;
            $created_by_name = $quotesObj->created_by_name;
            $assigned_user_name = $quotesObj->assigned_user_name;
            $assigned_user_id = $quotesObj->assigned_user_id;

        }
        
        parent::SubpanelQuickCreate("ptg_Message");
        $this->user_id_c =  $quotesObj->assigned_user_id;
        ?>
        <script>
        $( document ).ready(function(){
            $("#select_user_c").val("<?php echo $created_by_name;?>");
            $("#user_id_c").val("<?php echo $created_by;?>");

            $("#select_employee_c").val("<?php echo $assigned_user_name;?>");
            $("#user_id1_c").val("<?php echo $assigned_user_id;?>");

        })
        </script>
        <?php
    }
}