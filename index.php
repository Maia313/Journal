<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('partials/head.php'); ?>
</head>
<body>
	<?php require_once('partials/navbar.php'); ?>
	
	<div class="container is-half message is-link column box">
		<?php if(!isset($_SESSION['userID'])): ?> 
			<div class="message-body">
				<p class="title">Welcome to your Journal!</p>
				<p class="subtitle">Please sign in or create user credentials!</p>
			</div>
			
		<?php else:
		
			require_once('partials/post_form.php'); 
			require_once('partials/post_list.php');
		endif;?>
	
	</div>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>
