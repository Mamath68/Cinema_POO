<?php
$acteur = $result['data']['acteur'];
$roles = $result['data']['roles'];
$films = $result['data']['films'];
?>
<h1><?= $acteur->getActeur() ?></h1>


<div class="container text-center">
  <div class="row">
    <div class="col"><img src="<?= $acteur->getImg() ?>" class="img-fluid"></div>
    <div class="col">
      <div>Date de naissance : <?= $acteur->getDateNaissance() ?></div>
      <div>Nationalité : <?= $acteur->getNationalite() ?></div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <section>
        <?php
        foreach ($roles as $role) { ?>
          <div>Rôle :<?= $role->getRole() ?>
        <?php
        }
        foreach ($films as $film) { ?>
          Dans le Film : <a href="index.php?ctrl=film&action=detailFilm&id=<?= $film->getId() ?>"><?= $film->getTitre() ?></a></div>
        <?php
        } ?>

      </section>
    </div>
  </div>
</div>

<?php
$title = $acteur->getActeur();
