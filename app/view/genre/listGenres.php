<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des Genres</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Libellé</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <?php
  while ($genre = $genres->fetch()) {
    ?>
    <tbody>
      <tr>
        <td>
          <?= $genre['libelle'] ?>
        </td>
        <td><a href="index.php?action=detailGenre&id=<?= $genre['id_genre'] ?>">Details</a></td>
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
$title = "Liste Des Genres";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");
