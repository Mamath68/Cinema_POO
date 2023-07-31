<?php ob_start();
$genre = $genre->fetch();
?>
<h1>
  <?= $genre['libelle'] ?>
</h1>

<div class="container text-center">
  <div class="row">
    <div class="col">
      <div>Genre :
        <?= $genre['libelle'] ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <section>
        <div>
          <h2>Liste du/des Films</h2>
        </div>
        <?php
        foreach ($film as $film) {
          ?>
          <div><a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><?= $film['titre'] ?></a></div>
          <?php
        }
        ?>
      </section>
    </div>
  </div>
</div>

<?php
$title = $genre['libelle'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");
