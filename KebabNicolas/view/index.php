<?php
include_once("../controller/indexCtrl.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebab</title>
</head>

<body>
    <div class="div_conteneur">
        <form action="index.php"  method="post">
            <label for="name">Entrez votre nom</label><br>
            <input type="text" placeholder="Entrer votre nom" name="name" id="name" /><br><br>
            <label for="nom">Choisissez un kebab</label><br>
            <select name="nom" id="nom">
                <option value="" selected>&choix&</option>
                <option value="Americain">Americain</option>
                <option value="Buffalo">Buffalo</option>
            </select>
            <br><br>
            <label for="">Choisissez votre quantité</label><br>
            <select name="cantite" id="">
                <option value="">--Choix--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <br><br>
            <div class="conteneur_bouton">
            <input type="submit" class="inp_add" name="add" value="Ajouter" />
            <input type="submit" name="remove" value="Supprimer" /><br>
            </div>
            <?= remove() ?>
            <?= add() ?>
        </form>
    </div>
    <style>
        body{
            background-color: rgb(216, 216, 216);
        }
        .div_conteneur{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 7%;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            min-width: 30vw;
            min-height: 30vw;
            padding: 2vw 0;
        }
        .conteneur_bouton{
            display: flex;
        }
        .inp_add{
            margin-right: 5vw;
        }
    </style>
</body>

</html>