<?php

require_once("PieceEchecs.php");

class Roi extends PieceEchecs {
	public function __construct($x, $y, $couleur) {
		parent::__construct($x, $y, $couleur);
	}

	public function aller($x, $y) {
		return ((abs($x - $this->getX()) == 0 && abs($y - $this->getY()) == 1) ||
		(abs($x - $this->getX()) == 1 && abs($y - $this->getY()) == 0) ||
		(abs($x - $this->getX()) == 1 && abs($y - $this->getY()) == 1) &&
		$this->estDansLEchiquier($x, $y));
	}
}