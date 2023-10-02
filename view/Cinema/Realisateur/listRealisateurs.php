<?php
$realisateurs = $result['data']['realisateur'];
?>
<h1>Bienvenue sur ma page des realisateurs</h1>

<table class="table text-center">
  <thead>
    <tr>
      <th colspan="2">Réalisateur</th>
      <th scope="col">Images</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <?php
  foreach ($realisateurs as $realisateur) {
  ?>
    <tbody>
      <tr>
        <td colspan="2"><?= $realisateur->getRealisateur() ?> </td>
        <td><img src="<?= $realisateur->getImg() ?> " class="img-fluid"></td>
        <td><a href="index.php?ctrl=realisateur&action=findMovieByRealisateur&id=<?= $realisateur->getId() ?>">Details</a></td>
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
