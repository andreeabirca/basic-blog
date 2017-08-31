<?php

require '../app/init.php';

if (isset($_GET['id'])) 
{
	$title = NULL;
	$body = NULL;

	$id = $_GET['id'];
		
	if ($_SERVER['REQUEST_METHOD'] == 'GET') 
	{
		$post = Post::getById($id);			
		$title = $post->title;
		$body = $post->body;
	} 
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$title = $_POST['title'];
		$body = $_POST['body'];

		$post = new Post();
		$post->id = $id;
		$post->title = $title;
		$post->body = $body;
		$post->save();
					
		header('Location: ' . BASE_URL);	
	} 
} 
else 
{
	header('Location: ' . BASE_URL);	
}
require VIEW_ROOT . '/views/admin/edit.php';