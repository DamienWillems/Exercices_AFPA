<?php

require_once ("liste.php");
require_once ("PieceEchecs.php");
require_once ("cavalier.php");
require_once ("fou.php");
require_once ("pion.php");
require_once ("reine.php");
require_once ("roi.php");
require_once ("tour.php");

// echo $tourBG->aller(1, 10) . " aller";
// if($tourBG->estDansLEchiquier()) echo " dedans";
// else echo " dehors";

$x = 2;
$y = 10;
$couleur = 2;

if($pionN1->aller($x, $y))
echo "Il peut aller en $x ; $y. <br>";
else echo "Il ne peut pas aller en $x ; $y. <br>";

if($pionN1->estDansLEchiquier($x, $y))
echo "Il est dans l'échiquier.<br>";
else echo "Il n'est pas dans l'échiquier.<br>";