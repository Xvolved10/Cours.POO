<?php
class Utilisater{

    private $email =null;
    private $ville=null;
    private $pseudo=null;
    private $MotdePasse=null;
    const HOST ="localhost";
    const DB_NAME ="eva-bsdonné";
    const LOGIN = 'root';
    const PASSWORD=  '';

public function getEmail(){
    $this->email;
}
public function setEmail($email){
    $this->email =$email;
}
public function getVille(){
    $this->ville;
}
public function setVille($Ville){
    $this->ville =$Ville;
}
public function getPseudo(){
    $this->pseudo;
}
public function setPseudo($pseudo){
    $this->pseudo =$pseudo;
}
public function getMotdePasse(){
    $this->MotdePasse;
}
public function setMotdePasse($MotdePasse){
    $this->MotdePasse =$MotdePasse;
}

    private function requet(){

$db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DB_NAME,self::LOGIN, self::PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $db;

    }
    
    public function envoi(){
        $send =$this->requet()->query("SELECT email,pseudo,name FROM utilisateurs INNER JOIN cities ON utilisateurs.id_citie = cities.id") ;
    $recsend=$send->fetchAll(PDO::FETCH_ASSOC);
    return $recsend;
    }

    public function inser(){
        $inser =$this->requet()->query("INSERT INTO `utilisateurs`( `email`, `MotDepasse`, `pseudo`) VALUES ('$this->email','$this->MotdePasse','$this->pseudo')");
    }

    public function verif (){
        $nbuser = $this->requet()->query("SELECT `email`, `pseudo` FROM `utilisateurs` WHERE email = '$this->email' OR pseudo = '$this->pseudo'");
        $NbId = $nbuser->fetch(PDO::FETCH_ASSOC);
        return $NbId;
    }
}
