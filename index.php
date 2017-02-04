<?php include_once 'inc/global.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<?php include_once 'inc/head.php'; ?>
</head>
<body>
		<?php include_once 'inc/header.php'; ?>
		<main id="page-content-wrapper" role="main">
			<div class="container">
				<h1>Bienvenue sur NatLink</h1>
			</div>
		</main>
		<?php if ($_SESSION['user']) echo "</div>" ?>
		<?php include_once 'inc/footer.php'; ?>
</body>
</html>
