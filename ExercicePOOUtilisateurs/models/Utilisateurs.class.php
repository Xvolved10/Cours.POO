<?php

    class Utilisateurs {
        private $id = 0;
        private $email = null;
        private $MotDepasse = null;
        private $pseudo = null;
        private $id_citie = 0;
        private $id_Roles = 0;
        private $Avatar = null;

        const HOST = "localhost";
        const DB_NAME = "blogville";
        const LOGIN = "root";
        const PASSWORD = "";

        public function getId() {
            return $this->id; //lecture de l'attribut id
        }
        public function setId($id) {
            return $this->id = $id; //écriture de l'attribut id
        }
        public function getEmail() {
            return $this->email; //lecture de l'attribut email
        }
        public function setEmail($email) {
            return $this->email = $email; //écriture de l'attribut email
        }
        public function getMotDepasse() {
            return $this->MotDepasse; //lecture de l'attribut MotDepasse
        }
        public function setMotDepasse($MotDepasse) {
            return $this->MotDepasse = $MotDepasse; //écriture de l'attribut MotDepasse
        }
        public function getPseudo() {
            return $this->pseudo; //lecture de l'attribut pseudo
        }
        public function setPseudo($pseudo) {
            return $this->pseudo = $pseudo; //écriture de l'attribut pseudo
        }
        public function getId_citie() {
            return $this->id_citie; //lecture de l'attribut id_citie
        }
        public function setId_citie($id_citie) {
            return $this->id_citie = $id_citie; //écriture de l'attribut id_citie
        }
        public function getId_Roles() {
            return $this->id_Roles; //lecture de l'attribut id_Roles
        }
        public function setId_Roles($id_Roles) {
            return $this->id_Roles = $id_Roles; //écriture de l'attribut id_Roles
        }
        public function getAvatar() {
            return $this->Avatar; //lecture de l'attribut Avatar
        }
        public function setAvatar($Avatar) {
            return $this->Avatar = $Avatar; //écriture de l'attribut Avatar
        }
    
    private function requete() {
        $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::DB_NAME, self::LOGIN ,self::PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    public function envoi(){
        // $this->requete();
        $send = $this->requete()->query("SELECT email,pseudo,`name` FROM `utilisateurs` INNER JOIN cities 
        ON utilisateurs.id_citie = cities.id"); 
        return $recsend = $send->fetchAll(PDO::FETCH_ASSOC);
        
        var_dump($recsend);
    }
    public function inser(){
        $inser =$this->requete()->query("INSERT INTO `utilisateurs`(`email`, `MotDepasse`, `pseudo`) VALUES ('$this->email','$this->MotDepasse','$this->pseudo');");
    }
    public function verif (){
        $nbuser =$this->requete()->query("SELECT email, pseudo FROM utilisateurs WHERE email= '$this->email' OR pseudo = '$this->pseudo'");
        $nbId =$nbuser->fetch(PDO::FETCH_ASSOC);
        return $nbId ;
    }
}

    ?>