<?php
	include_once 'header.php';
?>

	<section class="main-container">
		<div class="main-wrapper">
			<div class="card fat">
			<h2>Login</h2>
			<form class="login-form" action="includes/login.inc.php" method="POST">
				<input type="text" name="uid" placeholder="Username/email">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Login</button>
			</form>
			</div>
		</div>
	</section>

<?php
	include_once 'footer.php';
?>
