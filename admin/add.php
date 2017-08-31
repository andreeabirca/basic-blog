<?php

require '../app/init.php';

if( !empty($_POST))
{
	$title = $_POST['title'];
	$body  = $_POST['body'];

	$post = new Post();
	$post->title = $title;
	$post->body = $body;
	$post->save();

	header('Location: ' . BASE_URL);
}

require VIEW_ROOT . '/views/admin/add.php';