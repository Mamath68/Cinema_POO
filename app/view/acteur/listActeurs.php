<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des acteurs</h1>

<?php

echo '<table class="table">
<thead>
  <tr>
    <th colspan="2" style="background-color:bisque;">Prenom Nom</th>
    <th scope="col">Image</th>
    <th scope="col" style="background-color:bisque;">Details</th>
  </tr>
</thead>';
while ($acteur = $acteurs->fetch()) {
  echo '<tbody>
      <tr>
        <td colspan="2" style="background-color: bisque;
      padding-top: 10%;
      font-size: 20px;">' . $acteur['nom_acteur'] . '</td>
        <td><img src="' . $acteur['img'] . '" class="img-fluid"></td>
        <td style="background-color: bisque;
      padding-top: 10%;
      font-size: 20px;"><a href ="index.php?action=detailActeur&id=' . $acteur['id_acteur'] . '">Details</a></td>
      </tr>';
}
echo '</tbody>
  </table>';
?>
 <a href="#" class="go_top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
<?php

$title = "Liste Des Acteurs";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");