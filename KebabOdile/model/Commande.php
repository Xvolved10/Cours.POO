<?php

class Commande{
    private $nomKebab;
    private $prixAmericain = 10;
    private $prixBufallo = 12;
    private $nomClient;
    private $nombre;
    public function getNomKebab(){
        return $this->nomKebab;
    }
    public function setNomKebab($kebab){
        return $this->nomKebab = $kebab;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function getNomClient(){
        return $this->nomClient;
    }
    public function setNomClient($nomClient){
        return $this->nomClient = $nomClient;
    }

    public function  addKebab(){

        echo "Le kebab ".$this->nomKebab . "à été ajouté à la commande.";
    }
    public function calculerPrix(){
        if($this->nomKebab === "Americain"){
            $prix = $this->prixAmericain *  $this->nombre;
            echo "Le kebab ".$this->nomKebab ." au prix de ". $prix." Euros à été ajouté à la commande";
        }else{
            $prix = $this->prixBufallo *  $this->nombre;
            echo "Le kebab ".$this->nomKebab ." au prix de ". $prix." Euros à été ajouté à la commande";
        }
    }
    public function afficherCommande(){
        $nomClient = $this->nomClient;
        echo "Votre nom est " . $this->nomClient;
    }
    public function removeKebab(){
        echo "Le kebab " . $this->nomKebab . " à été retiré de la commande.";
    }
}