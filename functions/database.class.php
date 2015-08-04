<?php 


ini_set('error_reporting', E_ALL);

/**
* Clase para Conectar a la base de Datos
*/

require 'conect.php';

class Database extends Conect
// class Database
{


	/* Funcion para conectarce a una base de datos definida */
	function db_connect()
	{
		$parametro = new Conect();
		$otro      = $parametro->infoConection();
		// echo "<pre>".print_r($otro, true).'</pre>';
		$host      = $otro['DB_HOSTNAME']; 
		$db_name   = $otro['DB_NAME'];
		$user      = $otro['DB_USERNAME'];
		$passwd    = $otro['DB_PASSWORD'];
          
		$this->conexion = mysql_connect($host, $user, $passwd);
		mysql_select_db($db_name) or die ("No se pudo conectar");
		//mysql_query ("SET NAMES 'utf8'");
	}
                
	function db_exec($sql)
	{
		
		$this->resultado = mysql_query($sql);
		
	}

	function get_last_id()
	{
	
		$last_id = $this->id = mysql_insert_id();
	
		return($last_id);
	}

	function get_num_rows()
	{
		$num_rows = $this->num_rows = mysql_num_rows($this->resultado);
		
        return($num_rows);
	}

	function get_array()
	{
		
		$array = @mysql_fetch_array($this->resultado,MYSQL_ASSOC);
		
		return($array);
	}
                
	function db_close()
	{

		mysql_close($this->conexion);
		
	}
	
}

 ?>

