<?php ob_start()
  ?>

<h1>Bienvenu sur ma page de Film</h1>

<?php

while ($realisateur = $realisateurs->fetch()) {

  echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th colspan="2">Nom Prenom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Nationalité</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">' . $realisateur['id_realisateur'] . '</th>
      <td colspan="2">' . $realisateur['nom_realisateur'] . '</td>
      <td>' . $realisateur['date_naissance'] . '</td>
      <td>' . $realisateur['nationalite'] . '</td>
    </tr>
  </tbody>
</table>';
}
?>

<?php

$title = "Liste Des Réalisateur";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");