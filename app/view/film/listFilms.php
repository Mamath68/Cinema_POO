<?php ob_start()
  ?>

<h1>Bienvenue sur ma page de Film</h1><br>
<h2>Vous avez <?=$films->rowCount()?> films</h2> 
<?php
echo '<table class="table">
    <thead>
      <tr>
      <th scope="col">Titre</th>
      <th scope="col">Affiche</th>
      <th scope="col">Details</th>
      <th scope="col">Supprimer</th>
      </tr>
    </thead>';
while ($film = $films->fetch()) {
  echo '<tbody>
      <tr>
      <td>' . $film['titre'] . '</td>
      <td><img src="' . $film['img'] . '" class="img-fluid"></td>
      <td><a href ="index.php?action=detailFilm&id=' . $film['id_film'] . '">Details</a></td>
      <td><a href ="index.php?action=supprimerFilm&id=' . $film['id_film'] . '">Supprimer</a></td>
      </tr>';
}
echo ' </tbody>
      </table>';
?>
<a href="#" class="go_top">
  <i class="fa-solid fa-arrow-up"></i>
</a>
<?php

$title = "Liste Des Films";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");
