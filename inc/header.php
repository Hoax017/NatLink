

	<div id="navbar-wrapper">
		<header>
			<nav class="navbar navbar-GN navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/"><img src="/img/logo.png"></a>
						<div class="titreER">Espace <?= $_SESSION['user'] ?></div>
					</div>

					<div id="navbar-collapse" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<?php if (!$_SESSION['user']): ?>
								<li class="dropdown">
									<div class="navbar-form navbar-left" style="width: 128px;">
										<span class="input-group-btn">
											<a class="btn btn-default" href="/login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Connexion</a>
										</span>
									</div>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div>
	<?php if ($_SESSION['user']): ?>
		<div id="wrapper">
			<div id="sidebar-wrapper">
				<aside id="sidebar">
					<ul id="sidemenu" class="sidebar-nav">
					<?php if($_SESSION['user'] == "reserviste"): ?>
						<li>
							<a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
								<span class="sidebar-icon"><i class="fa fa-users"></i></span>
								<span class="sidebar-title">Mon Profil</span>
								<b class="caret"></b>
							</a>
							<ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
								<li><a href="/profil.php"><i class="fa fa-caret-right"></i>Mes Informations</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Visite Médicale</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Mon Agenda</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Mes Compétences</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Mes Missions</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Mes Formations</a></li>
							</ul>
						</li>
						<li>
							<a href="/event.php">
								<span class="sidebar-icon"><i class="fa fa-database"></i></span>
								<span class="sidebar-title">Mes Événements</span>
							</a>
						</li>
						<li>
							<a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
								<span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span>
								<span class="sidebar-title">Ma Communauté</span>
								<b class="caret"></b>
							</a>
							<ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
								<li><a href="#"><i class="fa fa-caret-right"></i>Annuaire</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Forum</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Boite à Outils</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Salon des Renseignements</a></li>
							</ul>
						</li>
					<?php elseif ($_SESSION['user'] == 'gestionnaire'): ?>
						<li>
							<a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
								<span class="sidebar-icon"><i class="fa fa-users"></i></span>
								<span class="sidebar-title">Annuaire Reservistes</span>
								<b class="caret"></b>
							</a>
							<ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
								<li><a href="#"><i class="fa fa-caret-right"></i>Visite Médicale</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Formation Continue</a></li>
							</ul>
						</li>
						<li>
							<a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
								<span class="sidebar-icon"><i class="fa fa-users"></i></span>
								<span class="sidebar-title">Messagerie</span>
								<b class="caret"></b>
							</a>
							<ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
								<li><a href="#"><i class="fa fa-caret-right"></i>Formation d'Emploi</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Mise à Disposition</a></li>
							</ul>
						</li>
						<li>
							<a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-1">
								<span class="sidebar-icon"><i class="fa fa-users"></i></span>
								<span class="sidebar-title">Missions</span>
								<b class="caret"></b>
							</a>
							<ul id="submenu-1" class="panel-collapse collapse panel-switch" role="menu">
								<li><a href="/profil.php"><i class="fa fa-caret-right"></i>Nouvelle Mission</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Missions en Cours</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>Historique</a></li>
							</ul>
						</li>
						<li>
							<a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-4">
								<span class="sidebar-icon"><i class="fa fa-users"></i></span>
								<span class="sidebar-title">Mon Reseau</span>
								<b class="caret"></b>
							</a>
							<ul id="submenu-4" class="panel-collapse collapse panel-switch" role="menu">
								<li><a href="#"><i class="fa fa-caret-right"></i>Forum</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="sidebar-icon"><i class="fa fa-users"></i></span>
								<span class="sidebar-title">Mes Événements</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="sidebar-icon"><i class="fa fa-database"></i></span>
								<span class="sidebar-title">Statistiques</span>
							</a>
						</li>
					<?php endif; ?>
					</ul>
				</aside>
			</div>
	<?php endif; ?>