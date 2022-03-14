<?php

require_once("PieceEchecs.php");

class Reine extends PieceEchecs {
	public function __construct($x, $y, $couleur) {
		parent::__construct($x, $y, $couleur);
	}

	public function aller($x, $y) {
		return ((abs($x - $this->getX()) == abs($y - $this->getY())) ||
		($x == $this->getX() || $y == $this->getY()) &&
		$this->estDansLEchiquier($x, $y));
	}
}