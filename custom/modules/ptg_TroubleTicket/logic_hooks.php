<?php

$hook_version  = 1;
$hook_array = Array();

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1,'Get notification when trouble ticket created', 'custom/modules/ptg_TroubleTicket/LogicHooks/notifications.php','Getnotifications','troubleTicket'); 

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1,'Generate trouble ticket', 'custom/modules/ptg_TroubleTicket/LogicHooks/notifications.php','Getnotifications','generateTicketNumber'); 


?>