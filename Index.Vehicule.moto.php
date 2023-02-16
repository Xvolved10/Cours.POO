<?php
include('class/Vehicule.class.php');
include('class/Moto.class.php');

// Instanciation de la classe moto qui hérite du constructeur de la classe véhicule
$ma_moto = new Moto("Yamaha", "noire", 4, Vehicule::NB_ROUES_2);

$ma_moto->rouler();

echo"<p>Mon vehicule possède " . $ma_moto->getNb_roues(). " roues.";

$ma_moto->afficheType();

$ma_moto->affichePrix();
?>



<!-- créer class select ALL avec une méthode <- + connexion BDD (monter dans le parent / GLOBALE) , faire une requete qui select toutes les colonnes dans une table avec une table dynamique qui peut être changé + nouvelle classe regions avec attributs de toutes les colonnes + relier utilisateurs avec global-->









