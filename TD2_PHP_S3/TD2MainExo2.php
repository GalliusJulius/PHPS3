<?php
require 'Personne.php';
require 'AfficheurDePersonne.php';
$p1 = new Personne("Moreliere");
$p2 = new Personne("Gauchotte");
$p1->prenom="Victor";
$p1->age="19";
$p2->prenom="Remi";
$p2->age="19";
echo("Impression avec echo de p1 : <br>");
echo($p1);
echo("Impression avec print_r de p1 : <br>");
print_r($p2);
echo("<br>");
echo("Impression avec var_dump de p1 : <br>");
var_dump($p2);
echo("<br> On utilise la classe de l'exo 3");
$afficheur = new AfficheurDePersonne($p1);
echo("<br> Impression avec 1 en param <br>");
$afficheur->afficher(1);
echo("<br> Impression avec 2 en param <br>");
$afficheur->afficher(2);
echo("<br> Impression avec 3 en param <br>");
$afficheur->afficher(3);
$p1->afficherAge();
$p1->punition("Je ne mange pas mon camarade!",10);