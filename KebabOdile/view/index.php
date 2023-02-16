<?php
session_start();
    include_once("../controller/indexCtrl.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebab</title>
</head>
<body>
    <?php if(isset($affiche)){ ?>
            <p><?= $affiche ?></p>
      <?php } ?>
      <?php if(isset($affiche1)){ ?>
            <p><?= $affiche1 ?></p>
      <?php } ?>
    <form action="" method="post">
        <label for="name">Entrez votre nom</label>
        <input type="text" name="name" id="name" /><br>
        <label for="nom">Choisissez un kebab</label>
        <select name="nom" id="nom">
            <option value="" selected>&choix&</option>
            <option value="Americain">Americain</option>
            <option value="Buffalo">Buffalo</option>
        </select>
        <input type="number" name="nombre" id="nombre" />
           
        <input type="submit" name="add" value="Ajouter" />
        <input type="submit" name="remove" value="Supprimer" />
    </form>
</body>
</html>