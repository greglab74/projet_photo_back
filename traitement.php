<?php
$genre = $_POST["genre"];
$titre = $_POST["titre"];
$photographe = $_POST["photographe"];
$lieu = $_POST["lieu"];
$date = $_POST["date"];
$annee = substr($date, 0, 4);
 $jour = substr($date, 8, 2);
 $mois = substr($date, 5, 2);
 $date2 = $annee . '-' . $mois . '-' . $jour;
$lienphoto = $_POST["lienphoto"];




  include 'include/connexion_dbh.php';

    //on insére dans la base le lieu de la photo
    $sql3 = "INSERT INTO lieu (lieu)
    VALUES ('$lieu')";
    $dbh->exec($sql3);
    //on recupere l'id du lieu que l'on vient de créer
      //$lienidlieu = $dbh->query('SELECT ID_lieu FROM lieu WHERE lieu = "'.$lieu.'"');
      //$lienidl = $lienidlieu->fetch();
      //$idlieu = $lienidl['ID_lieu'];

      $stmt = $dbh->prepare('SELECT ID_lieu FROM lieu WHERE lieu = "'.$lieu.'"');
if ($stmt->execute(array($lieu))) {
  while ($row = $stmt->fetch()) {
      $idlieu = $row['ID_lieu'];
  }
}

    //on insére dans la base le nom du photographe
    $sql4 = "INSERT INTO photographe (nom)
    VALUES ('$photographe')";
    $dbh->exec($sql4);
    //on recupere l'id du photographe que l'on vient de créer
        $lienidphotographe = $dbh->query('SELECT ID_photographe FROM photographe WHERE nom = "'.$photographe.'"');
        $lienid = $lienidphotographe->fetch();
        $idphotographe = $lienid['ID_photographe'];
    //on insére dans la table photo la nouvelle photo du formulaire
        $sql1 = "INSERT INTO photo (titre, dateprise, lienphoto, ID_lieu, ID_photographe)
        VALUES ('$titre','$date2','$lienphoto','$idlieu','$idphotographe')";
        $dbh->exec($sql1);
        //on recupere l'id de la photo nouvellement crée
        $lienidphoto = $dbh->query('SELECT ID_photo FROM photo WHERE lienphoto = "'.$lienphoto.'" AND titre = "'.$titre.'"');
        $lienidpho = $lienidphoto->fetch();
        $id_photo = $lienidpho['ID_photo'];

        //on insére dans la table apourgenre la relation id_photo-id_genre
        $insrelapourgenre = ("INSERT INTO apourgenre (ID_photo, ID_genre)
        VALUES ('$id_photo','$genre')");
        $dbh->exec($insrelapourgenre);

    echo "New record created successfully";


$dbh = null;
?>
