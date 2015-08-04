<?php 

/**
* 
*/
class Conect
{
	
	// const DB_TYPE = 'MY';
	var $host     = '127.0.0.1';
	var $name     = 'blog';
	var $user     = 'root';
	var $password = '';

	
	function infoConection()
	{

		$info = array(
			'DB_HOSTNAME' => $this->host,
			'DB_NAME'     => $this->name,
			'DB_USERNAME' => $this->user,
			'DB_PASSWORD' => $this->password,
			);

		return $info;
	}

	function printArray($value)
	{
		echo "<pre>".print_r($value, true)."</pre>";
	}

}


 ?>