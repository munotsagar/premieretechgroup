<?php

$hook_version  = 1;
$hook_array = Array();

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1,'Get notification when Quote created or saved', 'custom/modules/AOS_Quotes/LogicHooks/Logics.php','Logics','sendAlert'); 

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1,'Generate Quote number', 'custom/modules/AOS_Quotes/LogicHooks/Logics.php','Logics','generateQuoteNumber'); 


?>