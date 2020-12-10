<?php
	class cls_project_info{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function data_insert($p_name,$p_category,$p_des,$p_location,$status){
			$result = $this->con()->query("INSERT INTO `tbl_project_info` (`id`, `project_name`,`p_category`, `p_description`, `project_location`, `status`) VALUES
			(NULL, '$p_name','$p_category', '$p_des', '$p_location', '$status')");
			return $result;
		}
		public function projects_list(){
			$result = $this->con()->query("select * from tbl_project_info");
			return $result;
			
		}
		public function project_infobyid($p_id){
			$result = $this->con()->query("select * from tbl_project_info where id='$p_id'");
			return $result;
		}

		public function projects_edit($p_name,$p_category,$p_des,$p_location,$status,$pid){
			$result = $this->con()->query("UPDATE `tbl_project_info` SET `project_name` = '$p_name', `p_category` = '$p_category', `p_description` = '$p_des', `project_location` = '$p_location', `status` = '$status' WHERE `tbl_project_info`.`id` = '$pid'");
			return $result;
		}
		public function project_assign($p_name,$client_name,$amount,$issue_date,$delivery_date,$progress,$status){
			$result = $this->con()->query("INSERT INTO `tbl_assign_project` (`id`, `project_id`, `client_id`, `amount`, `issue_date`, `delivery_date`, `project_progress`, `status`) VALUES
			(NULL, '$p_name', '$client_name', '$amount', '$issue_date', '$delivery_date', '$progress', '$status')");
			return $result;
			
		}
		public function projects_assign_list(){
			$result = $this->con()->query("SELECT tbl_assign_project.*,(select tbl_clients.client_name from tbl_clients where tbl_assign_project.client_id = tbl_clients.id )as client_name,(select tbl_project_info.project_name from tbl_project_info where tbl_assign_project.project_id = tbl_project_info.id )as project_name  FROM `tbl_assign_project` ");
			return $result;
			
		}
		public function running_projects(){
			$result = $this->con()->query("SELECT count(id) as running_p FROM `tbl_assign_project` where status='0'");
			return $result;
		}
		public function pending_projects(){
			$result = $this->con()->query("SELECT count(id) as pending_p FROM `tbl_assign_project` where status='1'");
			return $result;
		}
		public function complete_projects(){
			$result = $this->con()->query("SELECT count(id) as complete_p FROM `tbl_assign_project` where status='2'");
			return $result;
		}
		public function running_clients(){
			$result = $this->con()->query("SELECT count(distinct(client_id))as running_c FROM `tbl_assign_project` where status='0'");
			return $result;
		}
		
		
	}	
?>