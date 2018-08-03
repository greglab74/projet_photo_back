<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photographie Website</title>
	<meta name="description" content="A photography-inspired website layout with an expanding stack slider and a background image tilt effect" />
	<meta name="keywords" content="photography, template, layout, effect, expand, image stack, animation, flickity, tilt" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<?php include 'include/connexion_dbh.php'; ?>
	<div class="container">
		<div class="hero">
			<div class="hero__back hero__back--static"></div>
			<div class="hero__back hero__back--mover"></div>
			<div class="hero__front"></div>
		</div>
		<header class="codrops-header">
			<h1 class="codrops-title"><img src="img/logo.png" alt="img01" width="250px"/> <span>Charleville</span></h1>
		</header>


		<!-- Création d'une catégorie -->
		<div class="stack-slider">
			<div class="stacks-wrapper">
				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Portraits"><span>Portraits</span></a></h2>
					<!-- Création d'un Article -->


					<?php
					$query = 'SELECT * FROM photo NATURAL JOIN apourgenre WHERE ID_genre = 1 ORDER BY dateprise DESC';
					$searchphoto = $dbh->query($query);


          while ($a = $searchphoto->fetch())
      {
          $idphoto = $a['ID_photo'];
          $titre = $a['titre'];
          $dateprise = $a['dateprise'];
          $lienphoto = $a['lienphoto'];
          $lieu = $dbh->query('SELECT lieu FROM lieu NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lieup = $lieu->fetch();
          $lieuphoto = $lieup['lieu'];

          $lienidphotographe = $dbh->query('SELECT nom FROM photographe NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lienidpho = $lienidphotographe->fetch();
          $photographe = $lienidpho['nom'];


          ?>

					<div class="item">
						<div class="item__content">
							<img src="<?php echo $lienphoto;?>" alt="img" />
							<h3 class="item__title"><?php echo $titre;?><span class="item__date"><?php echo $dateprise;?></span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Photographe: <?php echo $photographe;?></span></li>
									<li><i class="icon icon-focal_length"></i><span>Lieu:<?php echo $lieuphoto;?></span></li>

								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- Fin d'un Article -->

				</div>
				<!-- Fin d'une catégorie -->
				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Objets"><span>Objets</span></a></h2>
					<!-- Création d'un Article -->
					<?php
					$query = 'SELECT * FROM photo NATURAL JOIN apourgenre WHERE ID_genre = 2 ORDER BY dateprise DESC';
					$searchphoto = $dbh->query($query);


          while ($a = $searchphoto->fetch())
      {
          $idphoto = $a['ID_photo'];
          $titre = $a['titre'];
          $dateprise = $a['dateprise'];
          $lienphoto = $a['lienphoto'];
          $lieu = $dbh->query('SELECT lieu FROM lieu NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lieup = $lieu->fetch();
          $lieuphoto = $lieup['lieu'];

          $lienidphotographe = $dbh->query('SELECT nom FROM photographe NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lienidpho = $lienidphotographe->fetch();
          $photographe = $lienidpho['nom'];


          ?>

					<div class="item">
						<div class="item__content">
							<img src="<?php echo $lienphoto;?>" alt="img" />
							<h3 class="item__title"><?php echo $titre;?><span class="item__date"><?php echo $dateprise;?></span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Photographe: <?php echo $photographe;?></span></li>
									<li><i class="icon icon-focal_length"></i><span>Lieu:<?php echo $lieuphoto;?></span></li>

								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>

				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Paysages"><span>Paysages</span></a></h2>
					<!-- Création d'un Article -->
					<?php
					$query = 'SELECT * FROM photo NATURAL JOIN apourgenre WHERE ID_genre = 3 ORDER BY dateprise DESC';
					$searchphoto = $dbh->query($query);


          while ($a = $searchphoto->fetch())
      {
          $idphoto = $a['ID_photo'];
          $titre = $a['titre'];
          $dateprise = $a['dateprise'];
          $lienphoto = $a['lienphoto'];
          $lieu = $dbh->query('SELECT lieu FROM lieu NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lieup = $lieu->fetch();
          $lieuphoto = $lieup['lieu'];

          $lienidphotographe = $dbh->query('SELECT nom FROM photographe NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lienidpho = $lienidphotographe->fetch();
          $photographe = $lienidpho['nom'];


          ?>

					<div class="item">
						<div class="item__content">
							<img src="<?php echo $lienphoto;?>" alt="img" />
							<h3 class="item__title"><?php echo $titre;?><span class="item__date"><?php echo $dateprise;?></span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Photographe: <?php echo $photographe;?></span></li>
									<li><i class="icon icon-focal_length"></i><span>Lieu:<?php echo $lieuphoto;?></span></li>

								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- Fin d'un Article -->
				</div>

				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Animaux"><span>Animaux</span></a></h2>
					<!-- Création d'un Article -->
					<?php
					$query = 'SELECT * FROM photo NATURAL JOIN apourgenre WHERE ID_genre = 4 ORDER BY dateprise DESC';
					$searchphoto = $dbh->query($query);


          while ($a = $searchphoto->fetch())
      {
          $idphoto = $a['ID_photo'];
          $titre = $a['titre'];
          $dateprise = $a['dateprise'];
          $lienphoto = $a['lienphoto'];
          $lieu = $dbh->query('SELECT lieu FROM lieu NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lieup = $lieu->fetch();
          $lieuphoto = $lieup['lieu'];

          $lienidphotographe = $dbh->query('SELECT nom FROM photographe NATURAL JOIN photo WHERE ID_photo = "'.$idphoto.'"');
          $lienidpho = $lienidphotographe->fetch();
          $photographe = $lienidpho['nom'];


          ?>

					<div class="item">
						<div class="item__content">
							<img src="<?php echo $lienphoto;?>" alt="img" />
							<h3 class="item__title"><?php echo $titre;?><span class="item__date"><?php echo $dateprise;?></span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Photographe: <?php echo $photographe;?></span></li>
									<li><i class="icon icon-focal_length"></i><span>Lieu:<?php echo $lieuphoto;?></span></li>

								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- Fin d'un Article -->
				</div>

			</div>
			<!-- /stacks-wrapper -->
		</div>
		<!-- /stacks -->
		<img class="loader" src="img/three-dots.svg" width="60" alt="Loader image" />
	</div>
	<!-- /container -->
	<!-- Flickity v1.0.0 http://flickity.metafizzy.co/ -->
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
