<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$db = new cls_dbconfig();
	
	$cls_project_info  = new cls_project_info();
	
	$pid ="$_POST[pid]";
	$p_name ="$_POST[p_name]";
	$p_category ="$_POST[p_category]";
	$p_des = "$_POST[p_des]";
	$p_location = "$_POST[p_location]";
	$status = 0;

	
	
	$result = $cls_project_info->projects_edit($p_name,$p_category,$p_des,$p_location,$status,$pid);

	if($result == 1){

	function category($data){
            switch($data){
                case 'website':
                    return "Website";
                    break;
                case 'software':
                    return "Software";
                    break;
                case 'mobileapps':
                    return "Mobile Apps";
                    break;
                case 'dmarketing':
                    return "Digital Marketing";
                    break;
                default:
                    return "";
                    break;
            }
        }

		$array = array();
		$array['res'] = '1';
		$array['project_name'] = $p_name;
		$array['p_category'] = category($p_category);
		$array['p_description'] = $p_des;
		$array['project_location'] = $p_location;
		$result = json_encode($array);
		echo $result;

	}else{
		$array['res'] = '0';
		$result = json_encode($array);
		echo $result;
	}
?>