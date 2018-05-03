<?php

require_once('partials/entry_controller.php');

$post = $entry->getPostId($_GET['entryID']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('partials/head.php'); ?>
</head>
<body>
	<?php require_once('partials/navbar.php'); ?>
	
    <div class="container message column is-half is-info box">
        <?php if(isset($_SESSION['userID'])): ?>
        <h1 class="title">Edit your post</h1>

        <div>
            <form class="field" action="partials/edit_post.php" method="POST">
                <label for="title" class="label subtitle">Title</label>
                <div class="control">
                    <input type="text" class="input" name="title" value="<?= $post['title']; ?>">
                </div>
                <label for="content" class="label subtitle">Content</label>
                <div class="control">
                    <textarea class="textarea" name="content" rows="5"><?= $post['content'] ?></textarea>
                </div>
                <div class="control">
                    <input class="input" type="hidden" name="entryID" value="<?= $_GET["entryID"]?>">
                </div>
                <br>
                    <button type="submit" class="button is-warning">Update</button>
            </form> 
        </div>
        <?php endif; ?>
	</div>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>