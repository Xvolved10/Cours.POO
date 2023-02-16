<!-- Utilisation d'une Classe -->
<?php /*
//appel de la classe vehicule qui se trouve dans le dossier class/
include('class/Vehicule.class.php');
//instanciation de la classe vehicule
$ma_voiture = new Vehicule();
$la_voiture_du_voisin = new Vehicule();
//appel d'une méthode de la classe Vehicule
// $ma_voiture->demarrer();
//afficher la couleur de la voiture
// echo $ma_voiture->couleur;
// appel d'une méthode de la classe Vehicule 2
$la_voiture_du_voisin->rouler();
// afficher la marque de la voiture du voisin
echo $la_voiture_du_voisin->getMarque() . "<br><br>";

$la_voiture_du_voisin->setMarque("Renault");
echo "la nouvelle marque de la voiture du voisin est : " . $la_voiture_du_voisin->getMarque() . "<br><br>";

// instanciation de la classe vehicule 

$ma_voiture->info_vehicule($la_voiture_du_voisin) . "<br>";
// création nouvelle marque
$ma_voiture->setMarque("Fiat");
$ma_voiture->freiner($ma_voiture);
*/
?>

<!-- Constructor Vehicule -->
<?php
// appel de la classe Vehicule qui se trouve dans le dossier class/
include('class/Vehicule.class.php');

// instanciation de la classe Vehicule
$ma_voiture = new Vehicule("Citröen", "verte", 5, 4);
$sa_voiture = new Vehicule("Renault", "noire", 4, 4);

echo "<p>Ma voiture est de marque " . $ma_voiture->getMarque();
echo "<p>Le véhicule du voisin est  " . $sa_voiture->getCouleur();

$ma_voiture2 = new Vehicule("Peugeot", "rouge", 4, Vehicule::NB_ROUES_4);
$ma_voiture10 = new Vehicule("Peugeot", "rouge", 4, 4);

echo "le nombre d'instances est :" . Vehicule::getNbInstances() ;

?>

<!-- Controllers models views -->
<!-- table utilisateurs -->




















































