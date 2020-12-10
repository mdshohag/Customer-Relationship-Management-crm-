<?php
	class cls_contact_schedule{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function contact_insert($client_name,$emp_name,$description,$schedule_date){
			$result = $this->con()->query("INSERT INTO `rikhan_client_info`.`tbl_contact_schedule` (`id`, `client_id`, `emp_name`, `description`, `schedule_date`) VALUES 
			(NULL, '$client_name', '$emp_name', '$description', '$schedule_date');");
			return $result;
		}
		public function contact_list(){
			$result = $this->con()->query("SELECT tbl_contact_schedule.*,(select tbl_clients.client_name from tbl_clients where tbl_contact_schedule.client_id = tbl_clients.id) as client_name   FROM `tbl_contact_schedule` where status='1' order by id desc");
			return $result;
		}
	}	
?>