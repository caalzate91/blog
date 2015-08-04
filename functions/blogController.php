<?php 

require 'functions/database.class.php';

/**
* Clase para hacer blogs
*/
class blog extends Database
{

	function nombreAutor()
	{
		$name =  "Camilo Alzate";
		return $name;
	}

	/**
	Función para mostrar blogs
	*/
	function printPost($v)
	{
		
		Database::db_connect();

		$sql = 'SELECT title, content, image, datepost FROM post WHERE id = '.$v;
		Database::db_exec($sql);

		$blog = Database::get_array();

		return $blog;

		Database::db_close();


	}


}


 ?>