<?php require_once('session_start.php'); ?>

<nav class="container navbar column is-half" aria-label="main navigation">
	<div class="navbar-brand">
		<h1 class="title">Journal</h1>

		<div class="navbar-end">
			<ul class="navbar">
				
				<?php if(!isset($_SESSION['userID'])): ?>
				
				<li class="navbar-item">
					<a href="signup.php">Sign up</a>
				</li>
				<li class="navbar-item">
					<a href="signin.php">Sign in</a>
				</li>
				
				<?php else:  ?>
									
				<li class="navbar-item">
					<a href="partials/signout.php">Sign out</a>
				</li>

				<?php endif; ?>	
			</ul>
		</div>
	</div>
</nav>
<hr>