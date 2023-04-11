<?php ob_start()
    ?>
<h1>Bienvenue sur ma page d'Accueil</h1>

<form action="index.php?action=ajouterFilm" method="post" class="row g-3">
    <div class="col-6">
        <label for="titre_du_film" class="form-label">Titre</label>
        <input type="text" name="titre" id="titre" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="affiche" class="form-label">Affiche</label>
        <input type="text" name="img" id="affiche" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="date_de_sortie" class="form-label">Date de sortie</label>
        <input type="date" name="date_sortie" id="date" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="duree" class="form-label">Durée(En Minute)</label>
        <input type="number" name="duree" id="duree" max="300" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="id_du_film" class="form-label">Note</label>
        <input type="number" name="note" id="note" class="form-control">
    </div>
    <div class="col-md-12">
        <label for="id_du_film" class="form-label">Synopsis</label>
        <input type="text" name="synopsis" id="synopsis" class="form-control">
    </div>
    <div class="col-md-12">
        <label for="id_realisateur" class="form-label">ID du Realisateur</label>
        <input type="number" name="id_realisateur" id="id_realisateur" class="form-control">
    </div>
    <div class="col-1">
        <input type="submit" name="submit" value="ADD" class="btn btn-primary">
    </div>
</form>

<?php

$title = "Accueil";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");