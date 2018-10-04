<?php
class Database {
	public static $db;
	public static $con;

	function Database(){

		$this->user="root";$this->pass="root";$this->host="localhost:3309";$this->ddbb="vmclinic";

	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
