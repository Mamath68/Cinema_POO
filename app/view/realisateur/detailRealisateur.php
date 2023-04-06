<?php ob_start();
$realisateur = $realisateur->fetch();
?>
<?php echo '<h1>' . $realisateur['nom_realisateur'] . '</h1>' ?>

<?php

echo '<div class="container text-center">
<div class="row">
  <div class="col">
    <div>' . $realisateur['date_naissance'] . '</div>
    <div>' . $realisateur['nationalite'] . '</div>
  </div>
</div>
<div class="row">
  <div class="col">
    <section>
      <div>
        <h2>Synopsis</h2>
      </div>
      <div>list des films du realisateur</div>
    </section>
  </div>
</div>
</div>';
?>

<?php
$title = $realisateur['nom_realisateur'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");