<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$db = new cls_dbconfig();
	
	$cls_client = new cls_client();
	
	$cli_name = "$_POST[cli_name]";
	$cli_number = "$_POST[cli_number]";
	$cli_email = "$_POST[cli_email]";
	$cont_pesrsion = "$_POST[cont_pesrsion]";
	$cont_number = "$_POST[cont_number]";
	$cont_email = "$_POST[cont_email]";
	$status = "$_POST[status]";
	$file_id = "$_POST[file_id]";
	
	
	echo $cls_client->data_insert($cli_name,$cli_number,$cli_email,$cont_pesrsion,$cont_number,$cont_email,$status,$file_id);
?>