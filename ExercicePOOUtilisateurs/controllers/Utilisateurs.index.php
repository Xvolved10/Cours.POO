<?php
include("../models/Utilisateurs.class.php");

// var_dump($rectab);

function boucle(){
    $utilisateur1 = new Utilisateurs();
$rectab = $utilisateur1->envoi();
    foreach ($rectab as $key=>$value){
        echo "<h4>" . $value['email']  . " " .  $value['pseudo'] .  " "  . $value['name'] . "</h4>" ;
    }

}
// Condition Bouton send
if (isset($_POST["send"])) {
    $error = [];
    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
    } else {
        $error['pseudo'] = "<p>Veuillez écrire un pseudo<p>";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            $error["email"] = "Il faut renseigner un e-mail valide";
        }
    } else {
        $error['email'] = "<p>Le champ email est vide<p>";
    }

    if (isset($_POST['MotDepasse']) && !empty($_POST['MotDepasse'])) {
        $MotDepasse = $_POST['MotDepasse'];
    } else {
        $error['MotDepasse'] = "<p>Veuillez écrire un Mot de passe<p>";
    }

    if (empty($error)) {
        $send = new Utilisateurs ;
        $send->setPseudo($pseudo);
        $send->setEmail($email);
        $send->setMotDepasse($MotDepasse);
        $send->verif();

        if ($send->verif() === false) ;
            $send->inser();
            echo "Données enregistrées" ;
        } else {
                if ($send->verif()['email'] === $email) {
                    $emailExiste = "Le mail n'est pas disponible";
                }
                if ($send->verif()['pseudo'] === $pseudo) {
                    $pseudoExiste = "Le pseudo n'est pas disponible";
                }
        
    }
}


?>


