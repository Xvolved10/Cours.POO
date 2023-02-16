<!-- Utilisation classe Personne -->
<?php
/*
include('class/Personne.class.php');
// Personne 1
$personne1 = new Personne();
$personne1->setAge(25);
$personne1->setSexe(" un homme");
$personne1->setTaille(177);
$personne1->setNom("Burrito");
$personne1->setPrenom("Rodrigo");
$personne1->setNationalite("espagnol");



// Personne 2
$personne2 = new Personne();
$personne2->setAge(11);
$personne2->setSexe("un homme");
$personne2->setTaille(150);
$personne2->setNom("Ketchum");
$personne2->setPrenom("Sacha");
$personne2->setNationalite("Français");
$personne2->sepresenter();
$personne2->marier($personne2);

// Personne 3
$personne3 = new Personne();
$personne3->setAge(30);
$personne3->setSexe("une femme");
$personne3->setTaille(165);
$personne3->setNom("Gomez");
$personne3->setPrenom("Selena ");
$personne3->setNationalite("Américaine");
$personne3->sepresenter();
$personne3->marier($personne3);




// Condition bouton Valider
if (isset($_POST["Valider"])) {
    $error = [];
    if (isset($_POST['age']) && !empty($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $error['age'] = "<p>Veuillez écrire un age<p>";
    }
    if (isset($_POST['sexe']) && !empty($_POST['sexe'])) {
        $sexe = $_POST['sexe'];
    } else {
        $error['sexe'] = "<p>Veuillez écrire un sexe<p>";
    }
    if (isset($_POST['taille']) && !empty($_POST['taille'])) {
        $taille = $_POST['taille'];
    } else {
        $error['taille'] = "<p>Veuillez écrire une taille<p>";
    }
    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
        $nom = $_POST['nom'];
    } else {
        $error['nom'] = "<p>Veuillez écrire un nom<p>";
    }
    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    } else {
        $error['prenom'] = "<p>Veuillez écrire un prenom<p>";
    }
    if (isset($_POST['nationalite']) && !empty($_POST['nationalite'])) {
        $nationalite = $_POST['nationalite'];
    } else {
        $error['nationalite'] = "<p>Veuillez écrire une nationalité<p>";
    }
    if (empty($error)) {
        // echo "Salut les potes toutes les infos ont été récups";
        // Personne 4
        $personne4 = new Personne();
        $personne4->setAge($_POST["age"]);
        $personne4->setSexe($_POST["sexe"]);
        $personne4->setTaille($_POST["taille"]);
        $personne4->setNom($_POST["nom"]);
        $personne4->setPrenom($_POST["prenom"]);
        $personne4->setNationalite($_POST["nationalite"]);
        $personne4->sepresenter();
        $personne3->marier($personne4);
    }
}
*/
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Age</label>
        <input type="text" value="" name="age">
        <?php if (isset($error["age"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $error["age"] ?></p>
            </div>
        <?php } ?>
        <br><br>
        <label for="">Sexe</label>
        <input type="text" value="" name="sexe">
        <?php if (isset($error["sexe"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $error["sexe"] ?></p>
            </div>
        <?php } ?>
        <br><br>
        <label for="">Taille</label>
        <input type="text" value="" name="taille">
        <?php if (isset($error["taille"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $error["taille"] ?></p>
            </div>
        <?php } ?>
        <br><br>
        <label for="">Nom</label>
        <input type="text" value="" name="nom">
        <?php if (isset($error["nom"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $error["nom"] ?></p>
            </div>
        <?php } ?>
        <br><br>
        <label for="">Prénom</label>
        <input type="text" value="" name="prenom">
        <?php if (isset($error["prenom"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $error["prenom"] ?></p>
            </div>
        <?php } ?>
        <br><br>
        <label for="">Nationalité</label>
        <input type="text" value="" name="nationalite">
        <?php if (isset($error["nationalite"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $error["nationalite"] ?></p>
            </div>
        <?php } ?>
        <br><br>
        <input type="submit" value="Valider les données" name="Valider">

    </form>
</body>

</html> -->