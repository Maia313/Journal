<?php

require_once('partials/entry_controller.php');

$posts = $entry->getUsersPosts($userID);

foreach($posts as $post):

?>

<div class="section box">
	<div class="message-header">
		<h3 class="h5"><?= $post['title'] ?></h3>
		<div class="field is-grouped">
			<a href="edit_post.php?entryID=<?= $post["entryID"]?>" class="button"><i class="fas fa-pencil-alt"></i></a>	
			<form action="partials/delete_post.php" class="field" method="POST">
				<input type="hidden" name="entryID" value="<?= $post["entryID"] ?>">
				<button type="submit" class="button"><i class="fas fa-trash-alt"></i></button>
			</form>
		</div>
		</div>
		<div class="message-body">
			<p><?= $post['content'] ?></p>
		</div>	
</div>

<?php endforeach; ?>
