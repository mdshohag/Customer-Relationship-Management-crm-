<?php
	class cls_lib{
		public static function d($data){
			echo "<pre>";
			print_r ($data);
			echo "</pre>";

		}
		public static function dd($data){
			echo "<pre>";
			print_r ($data);
			echo "</pre>";
			die();
		}
		public static function ti($data){
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	}	
?>