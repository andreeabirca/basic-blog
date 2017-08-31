<?php

require_once('app/init.php');

if (isset($_GET['id']) && intval($_GET['id']) > 0) 
{
	$id = $_GET['id'];
	$post = Post::getById($id);
} 
else 
{
	header('Location: ' . BASE_URL);
}

require_once(VIEW_PATH . 'post.php' );