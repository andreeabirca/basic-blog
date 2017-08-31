<?php require VIEW_ROOT . '/views/templates/header.php'; ?>
<div id="main" class="container">
	<div id="primary" class="content-area">
		<div id="content" class="bg-faded p-4 my-4" role="main">
			<article class="post-238 post type-post status-publish format-standard hentry category-mysql category-php tag-blog tag-controller tag-model tag-mvc tag-mysql-2 tag-php-2 tag-view">
				<h3><?php echo htmlspecialchars($post->title); ?></h3>
				
				<p>
					<?php echo htmlspecialchars($post->body); ?><br>
					<?php echo 'Created at ' . htmlspecialchars($post->created_at); ?><br />
						
					<a href="admin/edit.php?id=<?php echo htmlspecialchars($post->id); ?>"><button class="default">Update</button></a>
					<a href="admin/delete.php?id=<?php echo htmlspecialchars($post->id); ?>" 
						onClick = "javascript: return confirm('Are you sure you want to delete?');"><button class="default">Delete</button></a>
				</p>
				</article>
			</div>
		</div>
	</div>

<?php require VIEW_ROOT . '/views/templates/footer.php'; ?>