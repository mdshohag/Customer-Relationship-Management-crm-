<?php
	class cls_login{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function admin_access($email,$pass){
			$no = "no";
			$yes = "yes";
			
			$ss = md5($pass);
			
			$result = $this->con()->query("SELECT * FROM tbl_user_info WHERE email = '$email' and password = '$ss'");
			$check = $result->num_rows;
			if($check == 0){
				return $no;
			}
			
			$row = $result->fetch_assoc();
			session_start();
			$_SESSION['admin_id'] = $row['id'];
			$_SESSION['admin_fname'] = $row['name'];
			return $yes;
		}
	}
?>