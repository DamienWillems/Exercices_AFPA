<?php

require_once("PieceEchecs.php");

class Cavalier extends PieceEchecs {
	public function __construct($x, $y, $couleur) {
		parent::__construct($x, $y, $couleur);
	}

	public function aller($x, $y) {
		return (abs($x - $this->getX() + ($y -$this->getY())) == 3
		&& ($x -$this->getX() != 0 && $y - $this->getY() != 0)
		&& $this->estDansLEchiquier($x, $y));
	}
}

?>