<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des Rôles</h1>

<?php

echo '<table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th>Prenom</th>
    <th>Nom</th>
  </tr>
</thead>';
while ($role = $roles->fetch()) {
  echo '<tbody>
    <tr>
      <th>' . $role['id_role'] . '</th>
      <td>' . $role['prenom'] . '</td>
      <td>' . $role['nom'] . '</td>
    </tr>';
}
echo '</tbody>
</table>';
?>

<?php

$title = "Liste Des Rôles";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");