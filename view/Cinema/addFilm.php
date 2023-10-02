<?php
$realisateurs = $result['data']['realisateurs'];
?>

<section class="gradient-form" style="background-color: #eee;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">Aujouter un film</h4>
                                </div>

                                <form action="index.php?ctrl=film&action=addFilm" method="post" enctype="multipart">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example11" name="titre" class="form-control" placeholder="Titre" />
                                        <label class="form-label" for="form2Example11">Titre</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example11" name="image" class="form-control" placeholder="Affiche" />
                                        <label class="form-label" for="form2Example11">Affiche</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="date" id="form2Example11" name="dateSortie" class="form-control" placeholder="Date de Sortie" />
                                        <label class="form-label" for="form2Example11">Date de Sortie</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="number" id="form2Example11" name="duree" class="form-control" placeholder="Durée(En Minute)" />
                                        <label class="form-label" for="form2Example11">Durée (En Minute)</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example11" name="note" class="form-control" placeholder="Note sur 5" />
                                        <label class="form-label" for="form2Example11">Note /5</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea name="synopsis" id="form2Example11" class="form-control" placeholder="Synopsis"></textarea>
                                        <label class="form-label" for="form2Example11">Synopsis</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="realisateur_id" class="form-label">Réalisateur</label>
                                        <select name="realisateur_id">
                                            <option value=" ">Realisateurs</option>
                                            <?php foreach ($realisateurs as $realisateur) { ?>
                                                <option value="<?= $realisateur->getId() ?> "><?= $realisateur->getRealisateur() ?>
                                                </option>;
                                            <?php }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-3 mb-3" type="submit">Ajouter</button> <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$title = "Ajouter un film";

?>