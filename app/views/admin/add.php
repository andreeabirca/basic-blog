<?php require VIEW_ROOT . '/views/templates/header.php'; ?>

	<h2>Add page</h2>
	<form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST" autocomplete="off">
		<div class="row">
			<p>
				<label for="title">
					Title
					<input type="text" name="title" id="title">
				</label>
			</p>
			
			<p>
				<label for="body">
					Body
				<textarea name="body" id="body" cols="30" rows="10"></textarea>
				</label>
			</p>

			<input type="submit" value="Add">
		</div>
	</form>

<?php require VIEW_ROOT . '/views/templates/footer.php'; ?>