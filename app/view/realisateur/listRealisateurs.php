<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des realisateurs</h1>

<?php

echo '<table class="table">
<thead>
  <tr>
    <th colspan="2">Prenom Nom</th>
    <th scope="col">Date de naissance</th>
    <th scope="col">Nationalité</th>
    <th scope="col">Details</th>
  </tr>
</thead>';
while ($realisateur = $realisateurs->fetch()) {
  echo '<tbody>
    <tr>
      <td colspan="2">' . $realisateur['nom_realisateur'] . '</td>
      <td>' . $realisateur['date_naissance'] . '</td>
      <td>' . $realisateur['nationalite'] . '</td>
      <td><a href ="index.php?action=detailRealisateur&id=' . $realisateur['id_realisateur'] . '">Details</a></td>
    </tr>';
}
echo '</tbody>
</table>';
?>

<?php

$title = "Liste Des Réalisateur";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");