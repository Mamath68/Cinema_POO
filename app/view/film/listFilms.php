<?php ob_start()
    ?>

<h1>Bienvenu sur ma page de Film</h1>

<?php

while ($film = $films->fetch()) {

    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>',
        // <th scope="col">Affiche</th>
        '<th scope="col">Date de sortie</th>
        <th scope="col">Durée</th>
        <th scope="col">Synopsis</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">' . $film['id_film'] . '</th>
        <td>' . $film['titre'] . '</td>',
        // <td>' . $film['img'] . '</td>
        '<td>' . $film['sortie_date'] . '</td>
        <td>' . $film['duree_film'] . '</td>
        <td>' . $film['synopsis'] . '</td>
      </tr>
    </tbody>
  </table>';
}
?>

<?php

$title = "Liste Des Films";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");