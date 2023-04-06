<?php ob_start();
$acteur = $acteur->fetch();
?>
<?php echo '<h1>' . $acteur['nom_acteur'] . '</h1>' ?>

<?php

echo
'<div class="container text-center">
  <div class="row">
    <div class="col"><img src="' . $acteur['img'] . '" class="img-fluid"></div>
    <div class="col">
    <div>' . 'Date de naissance : ' . ' ' . $acteur['date_naissance'] . '</div>
    <div>' . 'Nationalité : ' . '' . $acteur['nationalite'] . '</div>
  </div>
</div>
<div class="row">
  <div class="col">
    <section>';
    foreach ($casting as $casting) {
      echo '<div>' .'Rôle :'.' ' .$casting['nom_role'] . '</div>';
    }
    foreach ($film as $film) {
      echo '<div>' . "Nom du Film : " . $film['titre'] . '</div>';
    }
    echo 
    '</section>
  </div>
</div>
</div>';
?>

<?php
$title = $acteur['nom_acteur'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");