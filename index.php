<?php

require_once('app/init.php');

$posts = Post::getAll();

require_once(VIEW_PATH . 'index.php' );
