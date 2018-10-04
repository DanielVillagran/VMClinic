<?php

class MuniData
{
    public static $tablename = "municipalities";



    public static function getMuni()
    {
    	require 'rb.php';
<<<<<<< HEAD
    	R::setup( 'mysql:host=localhost:3309;dbname=vmclinic',
        'root', 'root' );
=======
    	R::setup( 'mysql:host=localhost;dbname=casamar5_rgbioclinic',

        'casamar5_uno', 'daniel200796' );

>>>>>>> 8211672452612f201f62bb9bafdada3ba7add1bf
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