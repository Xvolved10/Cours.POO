<?php
    // Création Class Globale
    class Globale {

        private $table = null ;
        protected $requete = null;

        const HOST = "localhost";
        const DB_NAME = "blogville";
        const LOGIN = "root";
        const PASSWORD = "";

    // Fonction privée connexion BDD
        private function connexion() {
            $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::DB_NAME, self::LOGIN ,self::PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    // Fonction public récupération des données
        public function envoi(){
            $envoi = $this->connexion()->query("SELECT * FROM regions "); 
            return $recEnvoi = $envoi->fetchAll(PDO::FETCH_ASSOC);
            
            var_dump($recEnvoi);
        }
    }
    ?>

