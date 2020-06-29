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


class ptg_Client_ConnectivityViewEdit extends ViewEdit
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
        $EmailClientCnt = count($app_list_strings['email_client_list']);
        $EmailClientDropDown = $app_list_strings['email_client_list'];

        $this->bean->email_client_c = str_replace('^', '', $this->bean->email_client_c);
        $email_client_c = explode(",", $this->bean->email_client_c);
        if($EmailClientCnt > 0) {
            $i = 0;
            $checkboxes.= '<div style="display:none;" id = "EmailClientCheckboxes">';
            foreach ($EmailClientDropDown as $key => $value) {
                $EmailClientId = str_replace(" ", "_", $value);
                if($email_client_c[$i] == $key) {
                    $jsCode.='$("#'.strtolower($EmailClientId).'_c").parent().parent().next().show();
                    $("#'.strtolower($EmailClientId).'_c").parent().parent().show();';
                } else {
                    $jsCode.='$("#'.strtolower($EmailClientId).'_c").parent().parent().next().hide();
       				$("#'.strtolower($EmailClientId).'_c").parent().parent().hide();';
                }

                $checked = ($email_client_c[$i] == $key)?'checked="checked"':'';
               $checkboxes.= '<label><input '.$checked.' type="checkbox" name="email_client_c[]" id = "'.$EmailClientId.'" value="'.$key.'"> '.$value.'</label><br><br>';

               $i++;
            }
            $checkboxes.= '</div><script>$(document).ready(function(){'.$jsCode.'});</script>';
        }
        echo $checkboxes; 
         
?>

<script type="text/javascript" >
    $(document).ready(function(){
        //hide 3 fields under POP
        if($('#pop_c').prop('checked', false)) 
            {
		        $("#popincomingmailserver_c").parent().parent().next().hide();
		        $("#popincomingmailserver_c").parent().parent().hide();

		        $("#pop_port_c").parent().parent().next().hide();
		        $("#pop_port_c").parent().parent().hide();

		        $("#pop_ssl_tls_c").parent().parent().next().hide();
		        $("#pop_ssl_tls_c").parent().parent().hide();
		    }   
        
        // //hide 3 fields under IMAP
        // $("#imapincomingmailserver_c").parent().parent().next().hide();
        // $("#imapincomingmailserver_c").parent().parent().hide();
        
        // $("#imap_port_c").parent().parent().next().hide();
        // $("#imap_port_c").parent().parent().hide();

        // $("#imap_ssl_tls_c").parent().parent().next().hide();
        // $("#imap_ssl_tls_c").parent().parent().hide();

        /*//hide 3 fields under SMTP
        $("#smtp_outgoing_mail_server_c").parent().parent().next().hide();
        $("#smtp_outgoing_mail_server_c").parent().parent().hide();
        
        $("#smtp_port_c").parent().parent().next().hide();
        $("#smtp_port_c").parent().parent().hide();

        $("#smtp_ssl_tls_c").parent().parent().next().hide();
        $("#smtp_ssl_tls_c").parent().parent().hide();*/

        /*//hide 3 fields under EAS
        $("#eas_server_name_c").parent().parent().next().hide();
        $("#eas_server_name_c").parent().parent().hide();
        
        $("#eas_port_c").parent().parent().next().hide();
        $("#eas_port_c").parent().parent().hide();

        $("#exchange_ssl_tls_c").parent().parent().next().hide();
        $("#exchange_ssl_tls_c").parent().parent().hide();*/

        var labelID;

        $('label').click(function() {
               $(this).children().trigger('click');
        });

        /*$("div[field='services_products_c'] > #services_products_c").remove();
        $("div[field='services_products_c']").append($("#serviceCheckboxes").html());*/

        $( document ).on("click", "#pop_c", function(){
            $("#popincomingmailserver_c").parent().parent().next().hide();
            $("#popincomingmailserver_c").parent().parent().hide();

            $("#pop_port_c").parent().parent().next().hide();
            $("#pop_port_c").parent().parent().hide();

            $("#pop_ssl_tls_c").parent().parent().next().hide();
            $("#pop_ssl_tls_c").parent().parent().hide();
            if($(this).prop('checked')) 
            {
                $("#popincomingmailserver_c").parent().parent().next().show();
                $("#popincomingmailserver_c").parent().parent().show();

                $("#pop_port_c").parent().parent().next().show();
                $("#pop_port_c").parent().parent().show();

                $("#pop_ssl_tls_c").parent().parent().next().show();
                $("#pop_ssl_tls_c").parent().parent().show();
            }
            else {
                /*$("#popincomingmailserver_c option:selected").prop("selected", false);
                $("#pop_port_c option:selected").prop("selected", false);
                $("#pop_ssl_tls_c option:selected").prop("selected", false);*/
            }
        });

        $( document ).on("click", "#imap_c", function(){
            $("#imapincomingmailserver_c").parent().parent().next().hide();
            $("#imapincomingmailserver_c").parent().parent().hide();

            $("#imap_port_c").parent().parent().next().hide();
            $("#imap_port_c").parent().parent().hide();

            $("#imap_ssl_tls_c").parent().parent().next().hide();
            $("#imap_ssl_tls_c").parent().parent().hide();
            if($(this).prop('checked')) 
            {
                $("#imapincomingmailserver_c").parent().parent().next().show();
                $("#imapincomingmailserver_c").parent().parent().show();

                $("#imap_port_c").parent().parent().next().show();
                $("#imap_port_c").parent().parent().show();

                $("#imap_ssl_tls_c").parent().parent().next().show();
                $("#imap_ssl_tls_c").parent().parent().show();
            }
            else {
                // $("#imapincomingmailserver_c").parent().parent().next().hide();
                // $("#imapincomingmailserver_c").parent().parent().hide();

                // $("#imap_port_c").parent().parent().next().hide();
                // $("#imap_port_c").parent().parent().hide();

                // $("#imap_ssl_tls_c").parent().parent().next().hide();
                // $("#imap_ssl_tls_c").parent().parent().hide();
            }
        });

        $( document ).on("click", "#smtp_c", function(){
            $("#smtp_outgoing_mail_server_c").parent().parent().next().hide();
            $("#smtp_outgoing_mail_server_c").parent().parent().hide();

            $("#smtp_port_c").parent().parent().next().hide();
            $("#smtp_port_c").parent().parent().hide();

            $("#smtp_ssl_tls_c").parent().parent().next().hide();
            $("#smtp_ssl_tls_c").parent().parent().hide();
            if($(this).prop('checked')) 
            {
                $("#smtp_outgoing_mail_server_c").parent().parent().next().show();
                $("#smtp_outgoing_mail_server_c").parent().parent().show();

                $("#smtp_port_c").parent().parent().next().show();
                $("#smtp_port_c").parent().parent().show();

                $("#smtp_ssl_tls_c").parent().parent().next().show();
                $("#smtp_ssl_tls_c").parent().parent().show();
            }
            else {
                // $("#imapincomingmailserver_c").parent().parent().next().hide();
                // $("#imapincomingmailserver_c").parent().parent().hide();

                // $("#imap_port_c").parent().parent().next().hide();
                // $("#imap_port_c").parent().parent().hide();

                // $("#imap_ssl_tls_c").parent().parent().next().hide();
                // $("#imap_ssl_tls_c").parent().parent().hide();
            }
        });

        $( document ).on("click", "#exchangeactivesync_c", function(){
            $("#eas_server_name_c").parent().parent().next().hide();
            $("#eas_server_name_c").parent().parent().hide();

            $("#eas_port_c").parent().parent().next().hide();
            $("#eas_port_c").parent().parent().hide();

            $("#exchange_ssl_tls_c").parent().parent().next().hide();
            $("#exchange_ssl_tls_c").parent().parent().hide();
            if($(this).prop('checked')) 
            {
                $("#eas_server_name_c").parent().parent().next().show();
                $("#eas_server_name_c").parent().parent().show();

                $("#eas_port_c").parent().parent().next().show();
                $("#eas_port_c").parent().parent().show();

                $("#exchange_ssl_tls_c").parent().parent().next().show();
                $("#exchange_ssl_tls_c").parent().parent().show();
            }
            else {
                // $("#imapincomingmailserver_c").parent().parent().next().hide();
                // $("#imapincomingmailserver_c").parent().parent().hide();

                // $("#imap_port_c").parent().parent().next().hide();
                // $("#imap_port_c").parent().parent().hide();

                // $("#imap_ssl_tls_c").parent().parent().next().hide();
                // $("#imap_ssl_tls_c").parent().parent().hide();
            }
        });

    });
</script>

<?php
        parent::display();
    }
}
