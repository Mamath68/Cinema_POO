<?php
$genre = $result['data']['genres'];
$films = $result['data']['films'];
?>
<h1><?= $genre->getLibelle() ?></h1>


<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Affiche</th>
      <th scope="col">Details</th>
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
      </tr>
    <?php
  }
    ?>
    </tbody>
</table>

<?php
$title = $genre->getLibelle();
