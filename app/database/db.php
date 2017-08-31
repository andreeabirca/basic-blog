<?php

class Database 
{
	private $connection;
	private $hostname;
	private $username;
	private $password;
	private $database;
		
	public function __construct()
	{
		$this->hostname = DATABASE_HOST;
		$this->username = DATABASE_USER;
		$this->password = DATABASE_PASSWORD;
		$this->database = DATABASE_NAME;		
	}

	public function openConnection()
	{
		$this->connection = mysqli_connect($this->hostname, $this->username, $this->password) 
			or die(mysql_error());
		mysqli_select_db($this->connection, $this->database ) 
			or die(mysql_error());
	}

	public function executeStatement($statement)
	{
		$this->openConnection();
		$result = mysqli_query($this->connection, $statement ) 
			or die(mysqli_error($this->connection));
		return $result;
	}
	
	public function executeSql($sql)
	{	
		$result = $this->executeStatement($sql);
		if(mysqli_num_rows($result) == 1) 
		{
			$data = mysqli_fetch_object($result);
		} 
		else 
		{
			$data = array();		
			while ($row = mysqli_fetch_object($result)) 
			{
				$data[] = $row;
			}
		}
		
		mysqli_free_result($result);
		return $data;
	}

	public function execute($dml)
	{
		$this->executeStatement($dml);
		return mysqli_affected_rows($this->connection);
	}
		
	public function sanitizeInput($value)
	{
		if (function_exists('mysql_real_escape_string')) 
		{
			if (get_magic_quotes_gpc())	
			{
				$value = stripslashes($value);
			}
			$value = mysql_real_escape_string($value);
		} 
		return $value;
	}
}