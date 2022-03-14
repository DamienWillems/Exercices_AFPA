<?php

require_once ("PieceEchecs.php");

class Tour extends PieceEchecs {
	public function __construct($x, $y, $couleur) {
		parent::__construct ($x, $y, $couleur);
	}

	public function aller($x, $y) {
		return ($x == $this->getX() || $y == $this->getY() &&
		$this->estDansLEchiquier($x, $y));
	}
}