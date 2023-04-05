<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des acteurs</h1>

<?php

echo '<table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th colspan="2">Prenom Nom</th>
    <th scope="col">Date de naissance</th>
    <th scope="col">Nationalité</th>
  </tr>
</thead>';
while ($acteur = $acteurs->fetch()) {
  echo '<tbody>
      <tr>
        <th>' . $acteur['id_acteur'] . '</th>
        <td colspan="2">' . $acteur['nom_acteur'] . '</td>
        <td>' . $acteur['date_naissance'] . '</td>
        <td>' . $acteur['nationalite'] . '</td>
      </tr>';
}
echo '</tbody>
  </table>';
?>
<?php

$title = "Liste Des Acteurs";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");