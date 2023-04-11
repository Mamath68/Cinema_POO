<?php ob_start();
$realisateur = $realisateur->fetch();
?>
<?php echo '<h1>' . $realisateur['nom_realisateur'] . '</h1>' ?>

<?php
echo
  '<div class="container text-center">
  <div class="row">
    <div class="col"><img src="' . $realisateur['img'] . '" class="img-fluid"></div>
    <div class="col">
    <div>' . 'Date de naissance : ' . ' ' . $realisateur['date_naissance'] . '</div>
    <div>' . 'Nationalité : ' . '' . $realisateur['nationalite'] . '</div>
  </div>
</div>
<div class="row">
  <div class="col">
    <section>
    <div><h2>Liste du/des Films</h2></div>';
foreach ($film as $film) {
  echo '<div><a href ="index.php?action=detailFilm&id=' . $film['id_film'] . '">' . $film['titre'] . '</a></div>';
}
echo
  '</section>
  </div>
</div>
</div>';
?>

<?php
$title = $realisateur['nom_realisateur'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");