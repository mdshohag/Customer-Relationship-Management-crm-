<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$db = new cls_dbconfig();
	
	$cls_project_info  = new cls_project_info();
	
	
	$p_name =cls_lib::ti("$_POST[p_name]");
	$client_name = cls_lib::ti("$_POST[client_name]");
	$amount = cls_lib::ti("$_POST[amount]");
	$issue_date = cls_lib::ti("$_POST[issue_date]");
	$delivery_date = cls_lib::ti("$_POST[delivery_date]");
	$progress = 0;
	$status = 0;
	
	echo $cls_project_info->project_assign($p_name,$client_name,$amount,$issue_date,$delivery_date,$progress,$status);
?>