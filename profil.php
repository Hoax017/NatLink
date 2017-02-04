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
				<div class="row">
					<div class="col-md-12">
						<ul class="list-group">
							<li class="list-group-item">Mes coordonnées</li>
							<li class="list-group-item">Etat civil</li>
						</ul>
					</div>
				</div>
			</div>
		</main>
	<?php if ($_SESSION['user']) echo "</div>" ?>
	<?php include_once 'inc/footer.php'; ?>
</body>
</html>
