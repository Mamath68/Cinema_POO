<?php ob_start();
$film = $film->fetch();
?>
<h1>Bienvenue sur ma page Detail Film</h1>

<?php
echo '<table class="table">
      <thead>
        <tr>
          <th scope="col">Titre</th>
          <th scope="col">Date de Sortie</th>
          <th scope="col">Durée du film</th>
          <th scope="col">Synopsis</th>
        </tr>
      </thead>';
echo '<tbody>
      <tr>
         <td>' . $film['titre'] . '</td>
         <td>' . $film['date_sortie'] . '</td>
         <td>' . $film['duree_du_film'] . '</td>
         <td>' . $film['synopsis'] . '</td>
      </tr>';
echo '</tbody>
</table>';
echo '<table class="table">
      <thead>
        <tr>
          <th scope="col">Acteurs</th>
          <th scope="col">Rôles</th>
          <th scope="col">Réalisateur</th>
        </tr>
      </thead>';
echo '<tbody>
      <tr>
         <td>' . //$film['titre']. 
         '</td>
         <td>' . //$film['date_sortie'] . 
         '</td>
         <td>' . //$film['duree_du_film'] .
          '</td>
      </tr>';
echo '</tbody>
</table>';
?>

<?php

$title = "Details Des Films";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");