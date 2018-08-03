<?php
  ###########################################
  ############ PDO-Extension #############
  ###########################################

  $serveur = 'db745062856.db.1and1.com';
  //$serveur = 'localhost';
  $login = 'dbo745062856';
  //$login = 'root';
  $mot_de_passe = '';
  //$mot_de_passe = '*1';
  $nom_bd = 'db745062856';


  $dbh = null;
  try {
    $dbh = new PDO("mysql:host=$serveur; dbname=$nom_bd;", $login, $mot_de_passe);
    $dbh->exec("SET CHARACTER SET utf8");
    echo "connexion à la base de données réussie";
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }

  ?>
