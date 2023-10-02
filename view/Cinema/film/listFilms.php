<?php
$films = $result['data']['film'];
?>

<h1>Bienvenue sur ma page de Film</h1>

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Affiche</th>
      <th scope="col">Details</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <?php
  foreach ($films as $film) {
  ?>
    <tbody>
      <tr>
        <td><?= $film->getTitre() ?></td>
        <td><img src="<?= $film->getImage() ?>" class="img-fluid"></td>
        <td><a href="index.php?ctrl=film&action=detailFilm&id=<?= $film->getId() ?>">Details</a></td>
        <td><a href="index.php?ctrl=film&action=deleteFilm&id=<?= $film->getId() ?>">Supprimer</a></td>
      </tr>
    <?php
  }
    ?>
    </tbody>
</table>

<?php

$title = "Liste Des Films";
