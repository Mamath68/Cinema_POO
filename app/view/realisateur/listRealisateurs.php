<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des realisateurs</h1>

<table class="table">
  <thead>
    <tr>
      <th colspan="2">Prenom Nom</th>
      <th scope="col">Images</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <?php
  while ($realisateur = $realisateurs->fetch()) {
    ?>
    <tbody>
      <tr>
        <td colspan="2">
          <?= $realisateur['nom_realisateur'] ?>
        </td>
        <td><img src="<?= $realisateur['img'] ?>" class="img-fluid"></td>
        <td><a href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur'] ?>">Details</a></td>
      </tr>
      <?php
  }
  ?>
  </tbody>
</table>

<a href="#" class="go_top">
  <i class="fa-solid fa-arrow-up"></i>
</a>
<?php

$title = "Liste Des Réalisateur";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");
