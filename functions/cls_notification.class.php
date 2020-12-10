<?php
	class cls_notification{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function con_notify(){
			date_default_timezone_set("Asia/Dhaka");
			$tomorrow = date('Y-m-d',strtotime('+1 day'));
			$result = $this->con()->query("SELECT tbl_clients.client_name,tbl_contact_schedule.id,tbl_contact_schedule.schedule_date FROM `tbl_contact_schedule` left join  tbl_clients on tbl_contact_schedule.client_id = tbl_clients.id  where tbl_contact_schedule.schedule_date = '$tomorrow'");
			return $result;
		}
		
	}	
?>