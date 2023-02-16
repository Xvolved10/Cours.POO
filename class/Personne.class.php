<!-- Création Class personne -->
<?php
class Personne{
    //déclaration des attributs
    private $age = null;
    private $sexe = null;
    private $taille = null;
    private $nom = null;
    private $prenom = null;
    private $nationalite = null;

    public function getAge() {
        return $this->age; //lecture de l'attribut age
    }
    public function setAge($age) {
        return $this->age = $age; //écriture de l'attribut age
    }
    public function getSexe() {
        return $this->sexe; //lecture de l'attribut sexe
    }
    public function setSexe($sexe) {
        return $this->sexe = $sexe; //écriture de l'attribut sexe
    }
    public function getTaille() {
        return $this->taille; //lecture de l'attribut taille
    }
    public function setTaille($taille) {
        return $this->taille = $taille; //écriture de l'attribut taille
    }
    public function getNom() {
        return $this->nom; //lecture de l'attribut nom
    }
    public function setNom($nom) {
        return $this->nom = $nom; //écriture de l'attribut nom
    }
    public function getPrenom() {
        return $this->prenom; //lecture de l'attribut prénom
    }
    public function setPrenom($prenom) {
        return $this->prenom = $prenom; //écriture de l'attribut prénom
    }
    public function getNationalite() {
        return $this->nationalite; //lecture de l'attribut nationalite
    }
    public function setNationalite($nationalite) {
        return $this->nationalite = $nationalite; //écriture de l'attribut nationalit
    }



    public function sepresenter() {
        echo "La personne est  " . $this->prenom . " " . $this->nom . " et elle à " . $this->age . " ans " . "<br>";
    }
    public function marier(Personne $nouvellepersonne) {
        echo $nouvellepersonne->prenom . " est " . $nouvellepersonne->sexe . ", est " . $nouvellepersonne->nationalite . " et fait " . $nouvellepersonne->taille . " centimètres" . "<br><br>" ;
        echo $this->prenom . $this->nom . " s'est marié avec " .$nouvellepersonne->prenom . " "  .$nouvellepersonne->nom . "<br><br>" ;
    }
}
?>





















<!-- creer 3 personnes et afficher toutes les caractéristiqes de chaque personne et leurs fonctions          null chaine vide 0-->