<?php

class MuniData
{
    public static $tablename = "municipalities";



    public function getMuni()
    {
    	require 'rb.php';
    	R::setup( 'mysql:host=localhost;dbname=casamar5_rgbioclinic',

        'casamar5_uno', 'daniel200796' );

    	$where='';
    	if(isset($_POST['id'])){
        		$lista=R::find( 'municipalities', ' state_id =  '.$_POST['id'],'ORDER BY name asc');
        		$lista=json_encode($lista);
        	}
    	else{
    			$lista=R::find( 'municipalities','ORDER BY name asc');
    		}
    	return $lista;
    }



}

?>