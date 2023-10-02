<?php
$acteurs = $result['data']['acteurs'];
?>
<h1>Bienvenue sur ma page des acteurs</h1>

<table class="table text-center">
  <thead>
    <tr>
      <th colspan="2">Acteur</th>
      <th scope="col">Image</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <?php
  foreach ($acteurs as $acteur) {
  ?>
    <tbody>
      <tr>
        <td colspan="2"><?= $acteur->getActeur()  ?></td>
        <td><img src="<?= $acteur->getImg() ?>" class="img-fluid"></td>
        <td><a href="index.php?ctrl=acteur&action=detailActeur&id=<?= $acteur->getId() ?>">Details</a></td>
      </tr>
    <?php
  }
    ?>
    </tbody>
</table>

<?php

$title = "Liste Des Acteurs";
