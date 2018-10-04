<?php
class Database {
	public static $db;
	public static $con;

	function Database(){
<<<<<<< HEAD
		$this->user="root";$this->pass="root";$this->host="localhost:3309";$this->ddbb="vmclinic";
=======
		$this->user="casamar5_uno";$this->pass="daniel200796";$this->host="localhost";$this->ddbb="casamar5_rgbioclinic";
>>>>>>> 8211672452612f201f62bb9bafdada3ba7add1bf
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
