<?php
class connection{
	public static function getConnection(){
		$conn = new mysqli("localhost:3306","root","","bochica");
		$conn->query("SET NAMES 'utf8'");
		return $conn;
	}
}
?>