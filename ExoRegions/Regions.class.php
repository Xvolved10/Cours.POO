<?php
    // Création class Regions fille de class Globale
    class Regions extends Globale {

        private $id = 0;
        private $code = 0;
        private $name = "";
        private $slug = "";

        public function getId()
        {
            return $this->id; //lecture de l'attribut id
        }
        public function setId($id)
        {
            return $this->id = $id; //écriture de l'attribut id
        }
        public function getCode()
        {
            return $this->code; //lecture de l'attribut code
        }
        public function setCode($code)
        {
            return $this->code = $code; //écriture de l'attribut code
        }
        public function getName()
        {
            return $this->name; //lecture de l'attribut name
        }
        public function setName($name)
        {
            return $this->name = $name; //écriture de l'attribut name
        }
        public function getSlug()
        {
            return $this->slug; //lecture de l'attribut slug
        }
        public function setSlug($slug)
        {
            return $this->slug = $slug; //écriture de l'attribut slug
        }
    }
?>