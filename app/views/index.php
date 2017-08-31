<?php require VIEW_ROOT . '/views/templates/header.php'; ?>
<div id="main" class="container">
	<div id="primary" class="content-area">
		<div id="content" class="bg-faded p-4 my-4" role="main">
			<article class="post-238 post type-post status-publish format-standard hentry category-mysql category-php tag-blog tag-controller tag-model tag-mvc tag-mysql-2 tag-php-2 tag-view">
				<?php foreach($posts as $post): ?>
					<a href="post.php?id=<?php 
						echo $post->id;?>"><?php 
						echo $post->title;?>
					</a>
					
					<p>
						<?php echo strstr($post->body,'.', TRUE); ?><br>
						<?php echo 'Created at '. $post->created_at;?>
					</p>
					<hr>

				<?php endforeach; ?>
			</article>
		</div>
	</div>
</div>
<?php require VIEW_ROOT . '/views/templates/footer.php'; ?>
