<?php
$genres = $result['data']['genre'];
?>
<h1>Bienvenu sur ma page des Genres</h1>

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Libellé</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <?php
  foreach ($genres as $genre) {
  ?>
    <tbody>
      <tr>
        <td><?= $genre->getLibelle() ?></td>
        <td><a href="index.php?ctrl=genre&action=detailGenre&id=<?= $genre->getId() ?>">Details</a></td>
      </tr>
    <?php
  }
    ?>
    </tbody>
</table>

<?php
$title = "Liste Des Genres";
