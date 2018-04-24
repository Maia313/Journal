<?php

require_once('partials/get_all_entries.php');

$post = $entry->getBlogPostById($_GET['entryID']);
?>

<!doctype html>
<html lang="en">
<head>
	<?php require_once('partials/header.php'); ?>
</head>
<body>
	<?php require_once('partials/navigation.php'); ?>
	
    <div class="container">
		
        <?php if(!isset($_SESSION['userID'])): ?>
        <h1 class="h2">Login in</h1>
        <?php else: ?>
        <h1 class="h2">Edit your post</h1>

        <div>
            <form action="partials/edit-blog-post.php" method="POST">
                <div>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $post['title']; ?>">
                </div>
                <div>
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="5"><?= $post['content'] ?></textarea>
                </div>
                    <input type="hidden" name="entryID" value="<?= $_GET["entryID"]?>">
                    <button type="submit" class="btn btn-primary">Update</button>
            </form> 
        </div>
        <?php endif; ?>
	</div>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>