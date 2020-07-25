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
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

require_once('include/MVC/View/views/view.list.php');
//require_once('modules/qr_QR_Boxes/qr_QR_BoxesListViewSmarty.php');
    class ptg_TroubleTicketViewList extends ViewList{

    public function listViewProcess() {
        global $current_user, $db;
        $this->processSearchForm();
        if($current_user->user_category_c == "Vendor") {
            // $this->params['custom_where'] = ' AND ptg_troubleticket.created_by = "'.$current_user->id.'" ';
            // exit();

            $sql = "select users.id from users inner join users_cstm on users.id = users_cstm.id_c where users_cstm.ptg_organization_id_c = '".$current_user->ptg_organization_id_c."'";
            $res = $db->query($sql);

            $num = $res->num_rows;
           


            if($num > 0) {
                while($row = $db->fetchByAssoc($res)){
                    $userIds[] = "'".$row['id']."'";
                }

                $this->params['custom_where'] = ' AND ptg_troubleticket.created_by IN ('.implode(", ", $userIds).') ';

            } else {
                $this->params['custom_where'] = ' AND ptg_troubleticket.created_by = "'.$current_user->id.'" ';
            }
        }
        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
            $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo $this->lv->display();
        }
    }    
        //public $type ='list';
    public function display()
    {
    	//echo "shifa";
        if (!$this->bean || !$this->bean->ACLAccess('list')) {
            ACLController::displayNoAccess();
        } else {
            //print_r($_REQUEST);exit;
            //$_POST['current_query_by_page'] = {"orderBy":"DATE_MODIFIED","sortOrder":"DESC"}
            if(empty($_REQUEST['orderBy']) && empty($_REQUEST['current_query_by_page'])) {
                //print_r($_POST['orderBy']);
            $_REQUEST['orderBy'] = strtoupper('date_modified');
            $this->params['overrideOrder'] = true;
            $_REQUEST['sortOrder'] = 'DESC';
            
        }
            $this->listViewPrepare();
            $this->listViewProcess();
        }
    }
}
?>