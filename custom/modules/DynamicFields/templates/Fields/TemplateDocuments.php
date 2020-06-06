<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
// NOTE => field type
require_once('modules/DynamicFields/templates/Fields/TemplateField.php');
class TemplateDocuments extends TemplateField{
    var $type = 'documents';
    var $len = '';

    function get_field_def() {
	
		$def = parent::get_field_def();

        //IF WE HAVE A DEFAULT VALUE SET IT
        $def['default'] = !empty($this->default) ? $this->default : $this->default_value;

        //STILL HAVE THE DB THINK OF THE FIELD AS A text
        $def['dbType'] = 'text';
		
		if(	isset($this->ext1)	)	$def[ 'doctype' ] 	= $this->ext1 ;            
		if(	isset($this->doctype))	$def[ 'doctype' ] 	= $this->doctype ;          
		
        return $def;
        
    }
	function __construct()
	{
		$this->vardef_map['doctype'] = 'ext1';		
	}
	function set($values){
	   parent::set($values);
	   if(!empty($this->ext1)){
	       $this->doctype = $this->ext1;
	   }
	   
	}
	

}