<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$db = new cls_dbconfig();
	
	$cls_project_info  = new cls_project_info();
	
	$p_id ="$_POST[p_id]";

	$project_info = $cls_project_info->project_infobyid($p_id);
	$row = $project_info->fetch_assoc();
	$array = array();
	$array['project_name'] = $row['project_name'];
	$array['p_category'] = $row['p_category'];
	$array['p_description'] = $row['p_description'];
	$array['project_location'] = $row['project_location'];

	$result = json_encode($array);
	echo $result;



