<?php ob_start()
  ?>

<h1>Bienvenue sur ma page des realisateurs</h1>

<?php

echo '<table class="table">
<thead>
  <tr>
    <th colspan="2" style="background-color:bisque;">Prenom Nom</th>
    <th scope="col">Images</th>
    <th scope="col" style="background-color:bisque;">Details</th>
  </tr>
</thead>';
while ($realisateur = $realisateurs->fetch()) {
  echo '<tbody>
    <tr>
      <td colspan="2">' . $realisateur['nom_realisateur'] . '</td>
      <td><img src="' . $realisateur['img'] . '" class="img-fluid"></td>
      <td><a href ="index.php?action=detailRealisateur&id=' . $realisateur['id_realisateur'] . '">Details</a></td>
    </tr>';
}
echo '</tbody>
</table>';
?>
 <a href="#" class="go_top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
<?php

$title = "Liste Des Réalisateur";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");