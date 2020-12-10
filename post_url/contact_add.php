<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$db = new cls_dbconfig();
	
	$cls_contact_schedule  = new cls_contact_schedule();
	
	
	$client_name =cls_lib::ti("$_POST[client_name]");
	$emp_name = cls_lib::ti("$_POST[emp_name]");
	$description = cls_lib::ti("$_POST[description]");
	$schedule_date = cls_lib::ti("$_POST[schedule_date]");

	
	echo $cls_contact_schedule->contact_insert($client_name,$emp_name,$description,$schedule_date);
?>