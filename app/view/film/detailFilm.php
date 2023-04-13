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
    <div>' . 'De : <a href ="index.php?action=detailRealisateur&id=' . $film['id_realisateur'] . '">' . $film['nom_realisateur'] . '</a>' . '</div>
    <div>' . "Note : " . $film['note'] . '/5 ';
foreach ($casting as $casting) {
  echo '<div>' . 'Avec : <a href ="index.php?action=detailActeur&id=' . $casting['id_acteur'] . '">' . $casting['nom_acteur'] . '</a>' . '; ' . 'Dans le Role de ' . $casting['nom_role'] . '</div>';
}
foreach ($genre as $genre) {
  echo '<div><a href ="index.php?action=detailGenre&id=' . $genre['id_genre'] . '">' . $genre['libelle'] . '</a></div>';
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