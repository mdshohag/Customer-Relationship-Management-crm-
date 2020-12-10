<?php
	class cls_client{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function clients_shortinfo(){
			$result = $this->con()->query("select id,client_name from tbl_clients");
			return $result;
			
		}
		public function data_insert($cli_name,$cli_number,$cli_email,$cont_pesrsion,$cont_number,$cont_email,$status,$file_id){
			$result = $this->con()->query("INSERT INTO tbl_clients(client_name,client_number,client_email,contact_persoin,contact_persoin_number,contact_persoin_email,status,file_id)VALUES('$cli_name','$cli_number','$cli_email','$cont_pesrsion','$cont_number','$cont_email','$status','$file_id')");
			return $result;
		}
		
		public function view_client_data(){
			$result = $this->con()->query("SELECT * from tbl_clients");
			return $result;
		}
		public function client_update_by_id($update_id){
			$result = $this->con()->query("select * from tbl_clients where id='$update_id'");
			return $result;
		}
		public function data_update($cli_name,$cli_number,$cli_email,$cont_pesrsion,$cont_number,$cont_email,$status,$file_id,$client_id){
			$result = $this->con()->query("UPDATE tbl_clients SET client_name='$cli_name', client_number='$cli_number', client_email='$cli_email', contact_persoin='$cont_pesrsion', contact_persoin_number='$cont_number', contact_persoin_email='$cont_email', status='$status', file_id='$file_id' WHERE id='$client_id'");
			return $result;
		}
	}	
?>