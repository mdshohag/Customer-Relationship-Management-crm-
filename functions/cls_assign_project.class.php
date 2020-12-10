<?php
	class cls_assign_project{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
	}	
?>