<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>contact</title>
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="resource/img/favicon.ico" /><![endif]-->
      <link rel="stylesheet" type="text/css" href="css/reset.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>


      <main>
        <?php
        include 'include/connexion_dbh.php';
        ?>
        <?php




  $reponse = $dbh->query('SELECT * FROM genre');
  ?>

  <section class="containerFormAdmin">
    <form action="traitement.php" class="formAdmin" method="post">
          <h3 class="h3Admin">AJOUTER UNE PHOTO</h3>
          <select id="marque" name="genre">
            <option disabled selected>Genre</option>
            <?php while ($a = $reponse->fetch())
          { ?>
            <option value="<?php echo $a['ID_genre'];?>"><?php echo $a['genre'];?></option><?php } ?>
          </select>

          <input type="text" class="left" name="titre" placeholder="titre" required />
          <input type="text" class="left" name="photographe" placeholder="photographe" required />
          <input type="text" class="left" name="lieu" placeholder="lieu" required />
          <input type="date" class="left" name="date" placeholder="date" required />
          <input type="text" class="left" name="lienphoto" placeholder="lien photo" required />

          <p>
            <input type="submit" class="envoyer" value="Envoyer" />
          </p>
    </form>

  </section>



      </main>


    </body>
  </html>
