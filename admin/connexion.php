<?php
  include "../config.php";
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Book - Connexion</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
  show_error();
  show_success();
  include "include/header.php";
?>

<div class="connexion">
  <h1>Se connecter</h1>
  <div class="connexion_form">
    <form method="post" action="reponse.php">
      <div class="field">
        <label for="identifiant_admin">Identifiant : </label> <input type="text" name="identifiant_admin" placeholder="Identifiant">
      </div>
      <div class="field">
        <label for="motdepasse_admin">Mot de passe : </label><input type="password" name="motdepasse_admin" placeholder="Mot de passe">
      </div>
      <input type="submit" class="send-button">
    </form>
  </div>
</div>
<?php include "include/footer.php"; ?>
