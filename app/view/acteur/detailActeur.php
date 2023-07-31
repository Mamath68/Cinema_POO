<?php ob_start();
$acteur = $acteur->fetch();
?>
<h1>
  <?= $acteur['nom_acteur'] ?>
</h1>

<div class="container text-center">
  <div class="row">
    <div class="col"><img src="<?= $acteur['img'] ?>" class="img-fluid"></div>
    <div class="col">
      <div> Date de naissance :
        <?= $acteur['date_naissance'] ?>
      </div>
      <div>Nationalité :
        <?= $acteur['nationalite'] ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <section>
        <?php
        foreach ($casting as $casting) {
          ?>
          <div>Rôle :
            <?= $casting['nom_role'] ?>
          </div>
          <?php
        }
        foreach ($film as $film) {
          ?>
          <div> Dans le Film : <a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><?= $film['titre'] ?></a>
          </div>
          <?php
        }
        ?>
      </section>
    </div>
  </div>
</div>

<?php
$title = $acteur['nom_acteur'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");
