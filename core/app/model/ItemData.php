<?php

class ItemData
{
    public static $tablename = "items";

    public function ItemData()
    {

    }

    public static function add()
    {
        $sql = "insert into " . self::$tablename . " (name,quantity,date) ";
        $sql .= "value (\"$this->name\",\"$this->quantity\",\"$this->date\")";
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
        $sql = "update " . self::$tablename . " 
        set name=\"$this->name\",
		quantity=\"$this->quantity\",
		date=\"$this->date\"
		 
		where id=$this->id";
        Executor::doit($sql);
    }

    public static function getById($id)
    {
        $sql = "select * from " . self::$tablename . " where id=$id";
        $query = Executor::doit($sql);
        return Model::one($query[0], new ItemData());
    }


    public static function getAll()
    {
        $sql = "select * from " . self::$tablename . " order by name desc";
        $query = Executor::doit($sql);
        return Model::many($query[0], new ItemData());
    }



    public static function getLike($q)
    {
        $sql = "select * from " . self::$tablename . " where title like '%$q%' or email like '%$q%'";
        $query = Executor::doit($sql);
        return Model::many($query[0], new ItemData());
    }


}

?>