<?php
$output_dir = $GLOBALS['sugar_config']['image_path'];
if(isset($_POST["op"]) && $_POST["op"] == "delete" && isset($_POST['name']))
{
	$fileName = $_POST['name'];
	
	$filePath = $output_dir. $fileName;
	if (file_exists($filePath)) 
	{
        unlink($filePath);
    }
	echo $fileName;
}
if(isset($_POST["op"]) && $_POST["op"] == "rename")
{
	$ori_Name = $output_dir.$_POST['data'];
	$new_Name = $output_dir.$_POST['newname'];
	if (file_exists($new_Name)) 
	{
	 echo 'exist';
	}
	else
	{
	if (file_exists($ori_Name)) 
	{
	rename($ori_Name,$new_Name);
    }
	}
	
}

?>