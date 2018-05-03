<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('partials/head.php'); ?>
</head>
<body>
	<?php require_once('partials/navbar.php'); ?>
    <div class="container column is-half message is-info box">
		<h1 class="title">Sign in</h1>

        <div>
            <form class="field" action="partials/signin_controller.php" method="POST">
                <?php require_once('partials/auth_form.php'); ?>
                <br>
                <div class="control is-grouped">
                    <button type="submit" class="button is-warning">Sign in</button>
                </div>
            </form> 
        </div>   
	</div>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>