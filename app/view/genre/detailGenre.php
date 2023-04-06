<?php ob_start();
$genre = $genre->fetch();
?>
<?php echo '<h1>' . $genre['libelle'] . '</h1>' ?>

<?php

echo '
<div class="container text-center">
  <div class="row">
    <div class="col">
      <div>list film</div>
      <div>du genre</div>
    </div>
  </div>
</div>';
?>

<?php
$genre = $genre['libelle'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");