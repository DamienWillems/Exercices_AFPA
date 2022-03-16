<?php
require_once("personne.php");
require_once("petit_camion.php");
require_once("grand_camion.php");
require_once("voiture.php");
require_once("fourgon.php");
require_once("permis.php");
require_once("moto_legere.php");

$motoS = new MotoLegere("MP-985-HJ", "Rouge", "Wsh", 75, 50, 2, 50, 5, false, ["A1", "A2", "A", "B"]);
$caisse = new Voiture("BC-786-AS", "Violet", "Bonjour !", 2, 144, 4, 60, 5, false, ["B", "B1"]);
$camionP = new PetitCamion("AG-852-ZD", "Blanc", "Bonjour", 4500, 100, 2, 3, 800, 400, 3, 100, false, ["C", "C1", "C1E"]);
$camionG = new GrandCamion("AR-489-RZ", "Jaune", "Wesh gros !", 15000, 300, 3, 3, 800, 4, 300, 100, false, ["C", "CE"]);

$mec = new Personne("Dupont", "François", "m", "0875481635", 21);

$A = new Permis("A", 24, ["A2"]);
$A1 = new Permis("A1", 16);
$A2 = new Permis("A2", 18);
$B = new Permis("B", 18);
$BVA = new Permis("BVA", 18);
$B1 = new Permis("B1", 18);
$BE = new Permis("BE", 18);
$C1 = new Permis("C1", 18, ["B"]);
$C = new Permis("C", 21, ["B"]);
$CE = new Permis("CE", 21, ["C", "B"]);
$C1E = new Permis("C1E", 18, ["B", "C1"]);
$D1 = new Permis("D1", 21, ["B"]);
$D = new Permis("D", 24, ["B"]);

echo "<pre>";

echo "<h1>Bonhomme</h1>";
$mec->setPermis($B1);
$mec->setPermis($B);
$mec->setPermis($C1);
$mec->setPermis($C1E);
$mec->setPermis($C);
$mec->setPermis($CE);
var_dump($mec);

echo "<hr>";
echo "<h1>Moto < 125</h1>";
$motoS->setPds(75);
$motoS->setProprietaire($mec);
$motoS->habilitation();
var_dump($motoS);

echo "<hr>";
echo "<h1>Voiture</h1>";
$caisse->setMatri("BA-213-AG");
$caisse->setProprietaire($mec);
$caisse->habilitation();
var_dump($caisse);

echo "<hr>";
echo "<h1>Camion 3,5t - 7,5t</h1>";
$camionP->setPds(14500);
$camionP->setPdsRemorque(500);
$camionP->setProprietaire($mec);
$camionP->changePermisRequis();
$camionP->habilitation();
var_dump($camionP);

echo "<hr>";
echo "<h1>Camion > 7,5t</h1>";
$camionG->setPds(10);
$camionG->setPdsRemorque(800);
$camionG->setProprietaire($mec);
$camionG->changePermisRequis();
$camionG->habilitation();
var_dump($camionG);

echo "<hr>";
echo "<h1>Autorisation</h1>";
echo "Moto légère :";
var_dump($motoS->habilitation());
echo "Voiture :";
var_dump($caisse->habilitation());
echo "Petit camion :";
var_dump($camionP->habilitation());
echo "Grand camion :";
var_dump($camionG->habilitation());

echo "<hr>";
echo "<h1>Autres</h1>";;
echo "</pre>";