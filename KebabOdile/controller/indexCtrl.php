<?php

include_once("../model/Commande.php");
$nombre = 0;
if (isset($_POST["add"])) {
    if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
        $kebab = new Commande();
        $nom = $_POST["nom"];
        $nombre++;
        $kebab->setNombre($nombre);
        $kebab->setNomKebab($nom);
        $affiche = $kebab->afficherCommande();
        $affiche = $kebab->calculerPrix();
    }
}
if (isset($_POST["remove"])) {
    if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
        $nom = $_POST["nom"];
        $kebab->setNomKebab($nom);
        $affiche1 = $kebab->removeKebab();
    }
}
