<?php ob_start();
$role = $role->fetch();
?>
<?php echo '<h1>' . $role['prenom'] . $role['nom'] . '</h1>' ?>

<?php
echo 
'
<div class="container text-center">
  <div class="row">
    <div class="col">
      <div>list film</div>
      <div> du/des rôle</div>
    </div>
  </div>
</div>
';
?>

<?php
$title = $role['prenom'] . $role['nom'];
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");