<?php require VIEW_ROOT . '/views/templates/header.php'; ?>

	<h2>Edit page</h2>
	<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="POST" autocomplete="off">
		<div class="row">
			<p>
				<label for="title">
					Title
					<input id="title" name="title" type="text" size="75" value="<?php 
						echo htmlspecialchars(($title)); ?>" autofocus/></p>
				</label>
			</p>

			<p>
			<label for="body">
				Body
			<textarea id="body" name="body" cols="30" rows="10"><?php 
					echo htmlspecialchars(($body));?></textarea>
			</label>
			</p>

			<input type="hidden" name="id" value="<?php echo htmlspecialchars(($post->id));?>">

			<input type="submit" value="Update">
		</div>
	</form>

<?php require VIEW_ROOT . '/views/templates/footer.php'; ?>