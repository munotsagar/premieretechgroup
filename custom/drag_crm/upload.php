<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
//If directory doesnot exists create it.
$output_dir = $GLOBALS['sugar_config']['image_path'];

if(isset($_FILES["myfile"]))
{

	$ret = array();
$result='';
	$error =$_FILES["myfile"]["error"];
   {
    
    	if(!is_array($_FILES["myfile"]['name'])) //single file
    	{
            $RandomNum   = time();
            
            $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name']));
			$ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.
         
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
			$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
			$target_path = $output_dir. $NewImageName;
			
			if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path))
			{
       	 	echo $NewImageName;
			 }
			 else
			 {
			 echo "<br> Error: ".$_FILES["myfile"]["error"];
			 }
	       	 	 $ret[$NewImageName]= $NewImageName;
				 //echo $NewImageName;
    	}
    	else
    	{
            $fileCount = count($_FILES["myfile"]['name']);
			
    		for($i=0; $i < $fileCount; $i++)
    		{
                $RandomNum   = time();
            
                $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name'][$i]));
                $ImageType      = $_FILES['myfile']['type'][$i]; //"image/png", image/jpeg etc.
             
                $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.','',$ImageExt);
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
                
                $ret[$NewImageName]= $NewImageName;
    		    if(move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$NewImageName ))
				{
				echo $NewImageName;
				}
				else
				{echo "<br> Error: ".$_FILES["myfile"]["error"];}
    		}
    	}
    }
   
 
}

