<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function getActualRelativePath($file_path){
	return str_replace(DIRECTORY_ROOT_PHYSICAL_PATH, "", $file_path);
}
function makeNewValidFileName($file_start_path, $file_name){
	$file_init_name = substr($file_name, 0, strrpos($file_name, "."));
	$file_extension = substr($file_name, strrpos($file_name, "."), strlen($file_name) - strrpos($file_name, "."));
	
	$count = 1;
	while(file_exists($file_start_path . $file_init_name . $file_extension)){
		$file_init_name .= $count;
		$count++;
	}
	return $file_init_name.$file_extension;
	
}
function replaceSlash($input){
	echo str_replace('\\','/',$input);		
}
?>