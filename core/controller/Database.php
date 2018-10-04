<?php
class Database {
	public static $db;
	public static $con;

	function Database(){
		$this->user="casamar5_uno";$this->pass="daniel200796";$this->host="localhost";$this->ddbb="casamar5_rgbioclinic";
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
