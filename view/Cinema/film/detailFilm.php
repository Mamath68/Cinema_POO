<?php
$film = $result['data']['film'];
$genres = $result['data']['genre'];
$roles = $result['data']['role'];
$acteurs = $result['data']['acteur'];

?>
<h1>
  <?= $film->getTitre() ?>
</h1>

<div class="container text-center">
  <div class="row">
    <div class="col"><img src="<?= $film->getImage() ?>" class="img-fluid"></div>
    <div class="col">
      <div>
        Sortis le : <?= $film->getDateSortie() ?> / Durée : <?= $film->getDuree() ?>
      </div>
      <div>
        Un film De : <a href="index.php?ctrl=realisateur&action=detailRealisateur&id=<?= $film->getRealisateur()->getId() ?>"><?= $film->getRealisateur()->getRealisateur() ?></a>
      </div>
      <div>
        Note : <?= str_replace(".", ",", $film->getNote()) ?>/5</div>
      <?php
      if ($acteurs) {
        foreach ($acteurs as $acteur) {
      ?>
          <div>
            Avec : <a href="index.php?ctrl=acteur&action=detailActeur&id=<?= $acteur->getId() ?>"><?= $acteur->getActeur() ?></a> <br>
          <?php
        }
      } else{
        ?>
        <h5>Pas d'acteur dans ce film</h5>
        <?php
      }
      if ($roles) {
        foreach ($roles as $role) {
          ?>
            Dans le Role de <?= $role->getRole() ?>
          </div>
        <?php
        }
      }else{
        ?>
        <h5>Pas de rôle dans ce film</h5>
        <?php
      }
      if ($genres) {
        foreach ($genres as $genre) {
        ?>
          <div>
            <a href="index.php?ctrl=genre&action=detailGenre&id=<?= $genre->getId() ?>"><?= $genre->getLibelle() ?></a>
          </div>
      <?php
        }
      } else{
        ?>
        <h5>Pas de genre dans ce film</h5>
        <?php
      }
      ?>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <section>
        <div>
          <h2>Synopsis</h2>
        </div>
        <div><?= $film->getSynopsis() ?></div>
      </section>
    </div>
  </div>
</div>


<?php
$title = $film->getTitre();
