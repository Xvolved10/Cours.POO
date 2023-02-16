<?php
// Création class Moto enfant de Véhicule
class Moto extends Vehicule {
    private $cylindree; //attribut particulier à la classe moto
    public function getCylindree(){
        return $this->cylindree;
    }
    public function setCylindree($cylindree) {
        if(!is_int($cylindree)) {
            trigger_error('La cylindree doit être un nombre entier', E_USER_WARNING);
            return;
        }
        return $this->cylindree= $cylindree;
    }
    public function afficheType() {
        echo "<p>Ce véhicule est une moto";
    }

         
    public function rouler() {
        parent::rouler();
        echo"<p>le véhicule est une moto";
    }

    public function affichePrix() {
        echo "<p>Le prix de cette moto est: " .$this->prix;
    }
}
