<?php ob_start();
$film = $film->fetch();
?>
<?php echo '<h1>' . $film['titre'] . '</h1>' ?>

<?php

echo
  '<div class="container text-center">
  <div class="row">
    <div class="col"><img src="' . $film['img'] . '" class="img-fluid"></div>
    <div class="col">
    <div>' . "Sortis le : " . $film['date_sortie'] . ' / ' . " Durée : " . $film['duree_du_film'] . '</div>
    <div>' . "De : " . $film['nom_realisateur'] . '</div>';
foreach ($casting as $casting) {
  echo '<div>' . "Avec : " . $casting['nom_acteur'] . '; ' . 'Dans le Role de ' . $casting['nom_role'] . '</div>';
}
foreach ($genre as $genre) {
  echo '<div>' . "Genre : " . $genre['libelle'] . '</div>';
}
echo '</div>
  </div>
<div class="row">
  <div class="col">
    <section>
      <div>
        <h2>Synopsis</h2>
      </div>
      <div>' . $film['synopsis'] . '</div>
    </section>
  </div>
</div>
</div>';
?>

<?php
$title = $film['titre'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");