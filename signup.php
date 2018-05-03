<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('partials/head.php'); ?>
</head>
<body>
	<?php require_once('partials/navbar.php'); ?>
    <div class="container column is-half message is-primary box">
		<h1 class="title">Create new account</h1>

        <div>
            <form class="field" action="partials/signup_controller.php" method="POST">
                <?php require_once('partials/auth_form.php'); ?>
                <br>
                <button type="submit" class="button is-warning">Sign up</button>
            </form> 
        </div>   
	</div>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>