<?php

class PacientData
{
    public static $tablename = "pacient";

    public function PacientData()
    {
        $this->title = "";
        $this->email = "";
        $this->image = "";
        $this->password = "";
        $this->is_public = "0";
        $this->created_at = "NOW()";
    }

    public static function add()
    {
        $sql = "insert into " . self::$tablename . " (name,lastname,gender,day_of_birth,address,phone,email,sick,medicaments,alergy,created_at,second_lastname,curp,state,born_state,nacionality,localidad,municipal) ";
        $sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->gender\",\"$this->day_of_birth\",\"$this->address\",\"$this->phone\",\"$this->email\",\"$this->sick\",\"$this->medicaments\",\"$this->alergy\",\"$this->created_at\",\"$this->second_lastname\",\"$this->curp\",\"$this->state\",\"$this->born_state\",\"$this->nacionality\",\"$this->localidad\",\"$this->municipal\")";
        Executor::doit($sql);
    }

    public static function delById($id)
    {
        $sql = "delete from " . self::$tablename . " where id=$id";
        Executor::doit($sql);
    }

    public static function del()
    {
        $sql = "delete from " . self::$tablename . " where id=$this->id";
        Executor::doit($sql);
    }

// partiendo de que ya tenemos creado un objecto PacientData previamente utilizamos el contexto
    public static function update_active()
    {
        $sql = "update " . self::$tablename . " set last_active_at=NOW() where id=$this->id";
        Executor::doit($sql);
    }


    public static function update()
    {
        $sql = "update " . self::$tablename . " set name=\"$this->name\",
		lastname=\"$this->lastname\",
		address=\"$this->address\",
		phone=\"$this->phone\",
		email=\"$this->email\",
		gender=\"$this->gender\",
		day_of_birth=\"$this->day_of_birth\",
		sick=\"$this->sick\",
		medicaments=\"$this->medicaments\",
		alergy=\"$this->alergy\",
		second_lastname=\"$this->second_lastname\", 
		curp=\"$this->curp\", 
		state=\"$this->state\", 
		nacionality=\"$this->nacionality\", 
		localidad=\"$this->localidad\", 
		municipal=\"$this->municipal\" 
		where id=$this->id";
        Executor::doit($sql);
    }

    public static function getById($id)
    {
        $sql = "select * from " . self::$tablename . " where id=$id";
        $query = Executor::doit($sql);
        return Model::one($query[0], new PacientData());
    }


    public static function getAll()
    {
        $sql = "select * from " . self::$tablename . " order by created_at desc";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PacientData());
    }

    public static function getStates()
    {
        $sql = "select * from " . self::$tablename . " order by name asc";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PacientData());
    }

    public static function getAllActive()
    {
        $sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PacientData());
    }
    public static function getBySQL($sql){
        $query = Executor::doit($sql);
        return Model::many($query[0],new ReservationData());
    }

    public static function getAllUnActive()
    {
        $sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PacientData());
    }


    public static function getUnreads()
    {
        return MessageData::getUnreadsByClientId($this->id);
    }


    public static function getLike($q)
    {
        $sql = "select * from " . self::$tablename . " where title like '%$q%' or email like '%$q%'";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PacientData());
    }


}

?>