<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$db = new cls_dbconfig();
	
	$cls_project_info  = new cls_project_info();
	
	$p_name ="$_POST[p_name]";
	$p_category ="$_POST[p_category]";
	$p_des = "$_POST[p_des]";
	$p_location = "$_POST[p_location]";
	$status = 0;

	
	
	echo $cls_project_info->data_insert($p_name,$p_category,$p_des,$p_location,$status);
?>