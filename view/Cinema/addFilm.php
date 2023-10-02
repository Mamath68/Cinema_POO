<?php
$realisateurs = $result['data']['realisateurs'];
?>
<form action="index.php?ctrl=film&action=addFilm" method="post" class="row g-3">
    <div class="col-6">
        <label for="titre_du_film" class="form-label">Titre</label>
        <input type="text" name="titre" id="titre" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="affiche" class="form-label">Affiche</label>
        <input type="text" name="image" id="affiche" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="date_de_sortie" class="form-label">Date de sortie</label>
        <input type="date" name="dateSortie" id="date" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="duree" class="form-label">Durée(En Minute)</label>
        <input type="number" name="duree" id="duree" max="300" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="id_du_film" class="form-label">Note</label>
        <input type="text" name="note" id="note" class="form-control">
    </div>
    <div class="col-md-12">
        <label for="id_du_film" class="form-label">Synopsis</label>
        <textarea class="form-control" name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
    </div>
    <div class="col-md-12">
        <label for="id_realisateur" class="form-label">Réalisateur</label>
        <select name="id_realisateur">
            <option value=" ">Realisateurs</option>
            <?php foreach ($realisateurs as $realisateur) { ?>
                <option value="<?= $realisateur->getId() ?> "><?= $realisateur->getPrenom() . " " . $realisateur->getNom() ?>
                </option>;
            <?php }
            ?>
        </select>
    </div>
    <div class="col-1">
        <input type="submit" name="submit" value="Ajouter" class="btn btn-primary">
    </div>
</form>

<?php

$title = "Ajouter un film";

?>