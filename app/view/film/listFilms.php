<?php ob_start()
  ?>

<h1>Bienvenue sur ma page de Film</h1>

<?php
while ($film = $films->fetch()) {

  echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Affiche</th>
        <th scope="col">Date de sortie</th>
        <th scope="col">Durée</th>
        <th scope="col">Synopsis</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>' . $film['id_film'] . '</th>
        <td>' . $film['titre'] . '</td>
        <td><img src="' . $film['img'] . '" class="img-fluid"></td>
        <td>' . $film['sortie_date'] . '</td>
        <td>' . $film['duree_film'] . '</td>
        <td>' . $film['synopsis'] . '</td>
      </tr>
    </tbody>
  </table>';
}
?>

<?php

$title = "Liste Des Films";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");