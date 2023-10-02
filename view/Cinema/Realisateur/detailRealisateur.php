<?php
$realisateurs = $result['data']['realisateur'];
$films = $result['data']['films'];

?>

<h1>
  <?= $realisateurs->getRealisateur() ?>
</h1>


<div class="container text-center">
  <div class="row">
    <div class="col"><img src="<?= $realisateurs->getImg() ?>" class="img-fluid"></div>
    <div class="col">
      <div>Date de naissance : <?= $realisateurs->getDateNaissance() ?></div>
      <div>Nationalité : <?= $realisateurs->getNationalite() ?></div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <section>
        <div>
          <h2>Liste du/des Films</h2>
        </div>
        <?php
        if (isset($films)) {
          foreach ($films as $film) {
        ?>
            <div><a href="index.php?ctrl=film&action=detailFilm&id=<?= $film->getId() ?>"><?= $film->getTitre() ?></a></div>
          <?php
          }
        } else {
          ?>
          <p>Pas de Film pour ce realisateur</p>
        <?php
        }
        ?>
      </section>
    </div>
  </div>
</div>
<?php
$title = $realisateurs->getRealisateur();
