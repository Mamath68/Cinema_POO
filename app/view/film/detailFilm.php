<?php ob_start();
$film = $film->fetch();
?>
<?php echo '<h1>' . $film['titre'] . '</h1>' ?>

<?php

echo '<div class="container text-center">
<div class="row">
  <div class="col"><img src="' . $film['img'] . '" class="img-fluid"></div>
  <div class="col">
    <div>' . $film['date_sortie'] . ' / ' .$film['duree_du_film'] . '</div>
    <div>hola</div>
    <div>como estas</div>
  </div>
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