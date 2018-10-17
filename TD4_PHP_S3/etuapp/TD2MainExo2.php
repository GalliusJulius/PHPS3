<?php
require 'src/personne/Personne.php';
require 'src/personne/Etudiant.php';
require 'src/personne/Enseignant.php';
require 'src/personne/GroupePersonne.php';
require 'src/afficheur/AfficheurDePersonne.php';
require 'src/afficheur/AfficheurEtudiant.php';
require 'src/afficheur/AfficheurEnseignant.php';
$p1 = new \src\personne\Etudiant("Moreliere","26","");
$p2 = new \src\personne\Enseignant("Gauchotte","02","math ");
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
$afficheur1 = new \src\afficheur\AfficheurEtudiant($p1);
$afficheur2 = new \src\afficheur\AfficheurEnseignant($p2);
echo("<br> Impression avec 1 en param <br>");
$afficheur1->afficher(1);
echo("<br> Impression avec 2 en param <br>");
$afficheur2->afficher(2);
echo("<br> Impression avec 3 en param <br>");
$afficheur1->afficher(3);
$p1->afficherAge();
$p2->afficherAge();
$p1->punition("Je ne mange pas mon camarade!",10);
$tab = [10,12];
echo($p2->calculerAgeEnfant($tab));
$p1->associerJour(1);
$p1->associerJour('Mardi');
$j = -1;

if(isset($_GET["val"])){
    $val = $_GET["val"];
    $p1->associerJour($val);
}
$p1->ajouterNote('Math',17.5);
$p1->ajouterNote('Math',16);
print("Moyenne en math : " .$p1->calculerMoyenne('Math')."<br>");
$p1->ajoutMultiple('Francais','12;14;16');
print("Moyenne en Francais : " .$p1->calculerMoyenne('Francais')."<br>");
$p1->modifNote('Francais',1,16);
print("Moyenne en Francais après modifs: " .$p1->calculerMoyenne('Francais')."<br>");
$tab=$p1->moyenneGene();
foreach($tab as $key=>$val){
    print("Il a eu $val en $key <br>");
}

$p3 = new \src\personne\Etudiant("Test2","26","");
$p3->ajoutMultiple('Math','10;12;8');

$groupe = new \src\personne\GroupePersonne(1,'Les Bests','informatique' );
$groupe->ajouterEtudiant($p1);
$groupe->ajouterEtudiant($p3);
var_dump($groupe);
printf($groupe->calculerMoyenne('Math')."<br>");
$tab=$groupe->genereTab(false);
printf("Trie par nom <br>");
foreach($tab as $key=>$val){
    print(" $val de moyenne pour l'étudiant : $key <br>");
}
printf("Trie par moyenne <br>");
$tab=$groupe->genereTab(true);
foreach($tab as $key=>$val){
    print(" $val de moyenne pour l'étudiant : $key <br>");
}