<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des acteurs</h1>


<table class="table">
  <thead>
    <tr>
      <th colspan="2">Prenom Nom</th>
      <th scope="col">Image</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <?php
  while ($acteur = $acteurs->fetch()) {
    ?>
    <tbody>
      <tr>
        <td colspan="2">
          <?= $acteur['nom_acteur'] ?>
        </td>
        <td><img src="<?= $acteur['img'] ?>" class="img-fluid"></td>
        <td><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>">Details</a></td>
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

$title = "Liste Des Acteurs";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");
