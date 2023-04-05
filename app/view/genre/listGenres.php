<?php ob_start()
    ?>

<h1>Bienvenu sur ma page des Genres</h1>

<?php

while ($genre = $genres->fetch()) {

    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Libellé</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>' . $genre['id_genre'] . '</th>
        <td>' . $genre['libelle'] . '</td>
      </tr>
    </tbody>
  </table>';
}
?>

<?php
$title = "Liste Des Genres";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");