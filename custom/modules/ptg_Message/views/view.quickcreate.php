<?php
class ptg_MessageViewQuickcreate extends ViewQuickcreate
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
}

?>