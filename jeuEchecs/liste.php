<?php

require_once ("PieceEchecs.php");
require_once ("cavalier.php");
require_once ("fou.php");
require_once ("pion.php");
require_once ("reine.php");
require_once ("roi.php");
require_once ("tour.php");

$poneyBG = new Cavalier (4, 3, 1);
$poneyBD = new Cavalier (7, 1, 1);
$poneyNG = new Cavalier (2, 8, 2);
$poneyND = new Cavalier (7, 8, 2);

$fouBG = new Fou (3, 1, 1);
$fouBD = new Fou (6, 1, 1);
$fouNG = new Fou (6, 5, 2);
$fouND = new Fou (6, 8, 2);

$pionB1 = new Pion (1, 2, 1);
$pionB2 = new Pion (2, 2, 1);
$pionB3 = new Pion (3, 2, 1);
$pionB4 = new Pion (4, 2, 1);
$pionB5 = new Pion (5, 2, 1);
$pionB6 = new Pion (6, 2, 1);
$pionB7 = new Pion (7, 2, 1);
$pionB8 = new Pion (8, 2, 1);
$pionN1 = new Pion (1, 7, 2);
$pionN2 = new Pion (2, 7, 2);
$pionN3 = new Pion (3, 7, 2);
$pionN4 = new Pion (4, 7, 2);
$pionN5 = new Pion (5, 7, 2);
$pionN6 = new Pion (6, 7, 2);
$pionN7 = new Pion (7, 7, 2);
$pionN8 = new Pion (8, 7, 2);

$reineB = new Reine (4, 1, 1);
$reineN = new Reine (4, 8, 2);

$roiB = new Roi (5, 1, 1);
$roiN = new Roi (5, 8, 2);

$tourBG = new Tour (1, 1, 1);
$tourBD = new Tour (8, 1, 1);
$tourNG = new Tour (1, 8, 2);
$tourND = new Tour (8, 8, 2);