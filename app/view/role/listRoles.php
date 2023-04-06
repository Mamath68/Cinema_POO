<?php ob_start()
?>

<h1>Bienvenue sur ma page des Rôles</h1>

<?php

echo '<table class="table">
<thead>
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
    <th scope="col">Details</th>
  </tr>
</thead>';
while ($role = $roles->fetch()) {
  echo '<tbody>
    <tr>
      <td>' . $role['prenom'] . '</td>
      <td>' . $role['nom'] . '</td>
      <td><a href ="index.php?action=detailRole&id=' . $role['id_role'] . '">Details</a></td>
    </tr>';
}
echo '</tbody>
</table>';
?>

<?php

$title = "Liste Des Rôles";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");