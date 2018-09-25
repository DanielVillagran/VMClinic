<?php

class StateData
{
    public static $tablename = "states";



    public  function getStates()
    {
        $sql = "select * from " . self::$tablename . " order by name asc";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PacientData());
    }



}

?>