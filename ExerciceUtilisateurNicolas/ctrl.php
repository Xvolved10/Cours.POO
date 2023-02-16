<?php
include("../Modele/utilisater.php");

// function envoi (){
$erreur = [];
if (isset($_POST['send'])) {
    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $pseudo = (string) $_POST['pseudo'];
    } else {
        $erreur['pseudo'] = "Erreur pseudo vide";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = (string) $_POST['password'];
    } else {
        $erreur['password'] = "Erreur password vide";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = (string) $_POST['email'];
    } else {
        $erreur["email"] = "Erreur email vide";
    }

    if (empty($erreur)) {
        $send = new Utilisater;
$send->setPseudo($pseudo);
$send->setEmail($email);
$send->setMotdePasse($password);
        $send->verif();

        if ($send->verif() === false) {
            $send->inser();
            echo 'Vous avais bien été enregistre';

        } else {
            if ($send->verif()['email'] === $email) {
                $mailExiste = "Le mail n'est pas disponible";
            }
            if ($send->verif()["pseudo"] === $pseudo) {
                $pseudoExiste = "Le pseudo n'est pas disponible";
            }
        }
    }
}


function boucle()
{
    $utilisteur1 = new Utilisater();

    $rectab = $utilisteur1->envoi();

    foreach ($rectab as $key =>  $Value) {
        echo "<div class='boucle'><h5>" . $Value['pseudo'] . "<br>" . $Value['email'] . "<br>" . $Value['name'] . "</h5></div> ";
    }
}
?>