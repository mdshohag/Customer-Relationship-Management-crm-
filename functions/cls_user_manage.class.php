<?php
	class cls_user_manage{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function user_insert($name,$emp_id,$department,$designation,$usertype,$mobile,$email,$pass){
			
			$yes = 2;
			
			$res = $this->con()->query("SELECT email From tbl_user_info where email='$email'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			
			$result = $this->con()->query("INSERT INTO tbl_user_info(name,employee_id,department,designation,usertype,mobile,email,password,isactive)VALUES('$name','$emp_id','$department','$designation','$usertype','$mobile','$email','$pass','1')");
			return $result;
		}
		
	}