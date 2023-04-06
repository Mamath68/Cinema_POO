<?php ob_start()
  ?>

<h1>Bienvenu sur ma page des Genres</h1>

<?php

echo '<table class="table">
<thead>
  <tr>
    <th scope="col">Libellé</th>
    <th scope="col">Detail</th>
  </tr>
</thead>';
while ($genre = $genres->fetch()) {
  echo '<tbody>
      <tr>
        <td>' . $genre['libelle'] . '</td>
        <td><a href ="index.php?action=detailGenre&id=' . $genre['id_genre'] . '">Details</a></td>
      </tr>';
}
echo '</tbody>
  </table>';
?>

<?php
$title = "Liste Des Genres";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");