<!-- Visibilité des Attributs/Méthodes -->
<?php
/*
class Vehicule{
    //déclaration des attributs
    private $marque = "Peugeot";
    public $couleur = "blanche";
    private $vitesse = 5;
    private $nb_roues = 4;

    public function getMarque() {
        return $this->marque; //lecture de l'attribut marque
    }
    public function setMarque($marque) {
        return $this->marque = $marque; //écriture de l'attribut marque
    }
    public function getVitesse() {
        return $this->vitesse; //lecture de l'attribut vitesse
    }
    public function setVitesse($vitesse) {
        return $this->vitesse = $vitesse; //écriture de l'attribut vitesse
    }
    public function getNb_roues() {
        return $this->nb_roues; //lecture de l'attribut nb-roues
    }
    public function setNb_roues($nb_roues) {
        return $this->nb_roues = $nb_roues; //écriture de l'attribut nb_roues
    }

    public function demarrer() {
        //code de la methode
        echo "<p>le véhicule de couleur " .$this->couleur." démarre !" ;

    }

    public function rouler() {
        //code de la méthode
    $this->demarrer();
        echo "<p>le véhicule roule ";
    }
// instanciation de la classe vehicule 
    public function info_vehicule(Vehicule $objet_vehicule) {
        echo $objet_vehicule->marque."<br>";
        echo "cette voiture de marque " . $objet_vehicule->marque . " a une couleur " . $objet_vehicule->couleur . "<br>" ;
        
    }
    public function freiner(Vehicule $nouveauvehicule) {
        echo "le véhicule de marque " . $nouveauvehicule->marque . " à un problème de freinage " . "<br><br><br><br><br>";
    }
}
*/
?>


<?php
//Création class Vehicule
class Vehicule
{
    //déclaration des attributs
    private $marque = "";
    private $couleur = "";
    private $vitesse = 0;
    private $nb_roues = 0;
    protected $prix = 10000;

    public function getMarque()
    {
        return $this->marque; //lecture de l'attribut marque
    }
    public function setMarque($marque)
    {
        return $this->marque = $marque; //écriture de l'attribut marque
    }
    public function getCouleur()
    {
        return $this->couleur; //lecture de l'attribut couleur
    }
    public function setCouleur($couleur)
    {
        return $this->couleur = $couleur; //écriture de l'attribut couleur
    }
    public function getVitesse()
    {
        return $this->vitesse; //lecture de l'attribut vitesse
    }
    public function setVitesse($vitesse)
    {

        return $this->vitesse = $vitesse; //écriture de l'attribut vitesse
    }
    public function getNb_roues()
    {
        return $this->nb_roues; //lecture de l'attribut nb-roues
    }
    public function setNb_roues($nb_roues)
    {
        return $this->nb_roues = $nb_roues; //écriture de l'attribut nb_roues
    }

   // déclaration du constructeur 
    // public function __construct($marque, $couleur, $vitesse, $nb_roues)
    // {
    //     echo "<p>-- appel du constructeur --";
    //     $this->marque = $marque;
    //     $this->couleur = $couleur;
    //     $this->vitesse = $vitesse;
    //     $this->nb_roues = $nb_roues;
    // }
    public function setNbroues($roues)
    {
        // nombres de roues doit être uniquement une valer numérique 
        if (!is_int($roues)) { // est ce un nombre entier ?
            trigger_error("Le nombre de roues doit être un nombre entier", E_USER_WARNING);
            return;
        }
        return $this->nb_roues = $roues;
    }
    // Constante de classe
    const NB_ROUES_2 = 2;
    const NB_ROUES_3 = 3;
    const NB_ROUES_4 = 4;

    // Attributs statiques - Définition
    // Exemple -- Compteur d'instances
    private static $nb_instances = 0;
    // déclaration du constructeur 
    public function __construct($marque, $couleur, $vitesse, $roues)
    {
        echo "<p>-- appel du constructeur --";
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
        $this->nb_roues = $this->setNbRoues($roues);
        self::$nb_instances = self::$nb_instances + 1;
    }
    // fonction qui retourne le nb d'instances de la classe
    public static function getNbInstances()
    {
        
        return self::$nb_instances;
    }
    public function demarrer() {
        //code de la methode
        echo "<p>le véhicule de couleur " .$this->couleur." démarre !" ;

    }

    public function rouler() {
        //code de la méthode
    $this->demarrer();
        echo "<p>le véhicule roule ";
    }
    












}




?>