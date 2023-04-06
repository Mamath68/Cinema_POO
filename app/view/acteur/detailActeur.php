<?php ob_start();
$acteur = $acteur->fetch();
?>
<?php echo '<h1>' . $acteur['nom_acteur'] . '</h1>' ?>

<?php

echo '<div class="container text-center">
<div class="row">
  <div class="col">
    <div>' . $acteur['date_naissance'] . '</div>
    <div>' . $acteur['nationalite'] . '</div>
  </div>
</div>
<div class="row">
  <div class="col">
    <section>
      <div>
        <h2>Synopsis</h2>
      </div>
      <div> liste des films des acteur </div>
    </section>
  </div>
</div>
</div>';
?>

<?php
$title = $acteur['nom_acteur'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");