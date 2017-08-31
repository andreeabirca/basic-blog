<?php


class Post 
{
	public $id;
	public $title;
	public $body;
	public $created_at;

	public static function getBySql($sql) 
	{
		$database = new Database();
		return $database->executeSql($sql);
	}

	public static function getById($id) 
	{
		$id = (int)$id;
		$sql = sprintf("SELECT * FROM posts WHERE id = %d LIMIT 1", $id);
		return self::getBySql($sql);					
	}

	public static function getAll() 
	{
		$sql = 'SELECT * FROM posts ORDER BY created_at DESC';
		return self::getBySql($sql);
	}

	public function insert() 
	{
		$database = new Database();
		$title = $database->sanitizeInput($this->title);
		$body = $database->sanitizeInput($this->body);
		$dml = sprintf("INSERT INTO posts (title, body, created_at) VALUES ('%s', '%s', NOW())", $title, $body);	
		return $database->execute($dml);
	}

	public function update() 
	{
		$database = new Database();
		$id = (int)$this->id;
		$title = $database->sanitizeInput($this->title);
		$body = $database->sanitizeInput($this->body);
		$dml = sprintf("UPDATE posts SET title = '%s', body = '%s' WHERE id = %d", $title, $body, $id);
		return $database->execute($dml);
	}

	public function delete() 
	{
		$database = new Database();
		$id = (int)$this->id;
		$dml = sprintf("DELETE FROM posts WHERE id = %d LIMIT 1", $id);
		return $database->execute($dml);
	}
	
	public function save() 
	{
		if (isset($this->id)) 
		{	
			return $this->update();
		} 
		else 
		{
			return $this->insert();
		}
	}	
}