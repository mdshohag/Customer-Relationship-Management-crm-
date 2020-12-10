<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$db = new cls_dbconfig();
	
	$cls_user_manage  = new cls_user_manage();
	
	
	$name =cls_lib::ti("$_POST[name]");
	$emp_id = cls_lib::ti("$_POST[emp_id]");
	$department = cls_lib::ti("$_POST[department]");
	$designation = cls_lib::ti("$_POST[designation]");
	$usertype = cls_lib::ti("$_POST[usertype]");
	$mobile = cls_lib::ti("$_POST[mobile]");
	$email = cls_lib::ti("$_POST[email]");
	$pass =  md5("$_POST[pass]");
	
	echo $cls_user_manage->user_insert($name,$emp_id,$department,$designation,$usertype,$mobile,$email,$pass);
?>