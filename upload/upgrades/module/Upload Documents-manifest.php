<?php

// Author Details: Ideadunes, No. 9, Lane No. 6, Hindustan Court, Kalyani Nagar, Pune - 411006
// Email id: plugins@ideadunes.com, Contact Number: +917709399141, +918788002503, +912026650157
// Skype id: salesatideadunes, niket.gupta51
    
    // Manifest file for information regarding application
    // You will find the entries below in this order: 
    // Acceptable Sugar Versions exact(exact version needs ot be specified) or regex(version can be specified in some pattern), Acceptable Sugar Flavors (CE, PRO, ENT, ULT, CORP), Readme, Author, Description, Icon for displaying in UI (path to graphic contained within zip package),Uninstallable, Name, Date Published, Type of Code (valid choices are: full, langpack, module, patch, theme), Version of Ideadunes Git Repo, Remove Tables (while uninstalling a module it asks whether you would like to remove tables or do not want to remove them).

// NOTE => manifest to install new field type in sugar
$manifest = array(
    'acceptable_sugar_versions' => array(
        "exact_matches" => array(),
        "regex_matches" => array(0 => "6\\.*\\.*")
    ),
    'acceptable_sugar_flavors' => array(
        'OS', 'PRO', 'ENT', 'CE', 'ULT', 'CORP'
    ),
    'readme' => '',
    'author' => 'Ideadunes',
    'description' => 'New field type Multiple file upload of muitiple type',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Documents',
    'published_date' => '2020-06-06',
    'type' => 'module',
    'version' => '1.0',
);
$installdefs = array(
    'id' => 'Documents',
    'copy' =>
	array (
	0 =>
		array (
     		'from'=> '<basepath>/SugarModules/custom/',
    	 	'to'=> 'custom/',
		),
	),
   'language' =>
    array (
		0=> array (
			'from' => '<basepath>/SugarModules/Language/en_us.FieldDocuments.php',
			'to_module' => 'ModuleBuilder',
			'language' => 'en_us',
		),
      
	),
   
    'entrypoints' => array (
        array (
            'from' => '<basepath>/entry_point_registry.php',
            'to' => 'custom/include/MVC/Controller/entry_point_registry.php',
        ),
    ),
	'post_execute' => array(
		0 => '<basepath>/scripts/configOverride.php',
	),
);