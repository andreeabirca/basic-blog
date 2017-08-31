<?php

require '../app/init.php';

if (isset($_GET['id']) && intval($_GET['id']) > 0) 
{
	$id = $_GET['id'];
	
	$post = new Post();
	$post->id = $id;
	$post->delete();	
}

header('Location: ' . BASE_URL);