<?php

require_once("PieceEchecs.php");

class Pion extends PieceEchecs {
	public function __construct($x, $y, $couleur) {
		parent::__construct($x, $y, $couleur);
	}

	public function aller($x, $y) {
		return $x - $this->getX() == 0 && $this->estDansLEchiquier($x, $y)
		&& ($this->getCouleur() == 1 && ($y - $this->getY() == 1 || ($this->getY() == 2 && $y - $this->getY() == 2)))
		|| ($this->getCouleur() == 2 && ($y - $this->getY() == -1 || ($this->getY() == 7 && $y - $this->getY() == -2)));
	}

	public function bouffer(PieceEchecs $piece) {
		return abs($piece->getX() - $this->getX()) == 1
		&& ($this->getCouleur() != $piece->getCouleur())
		&& (($this->getCouleur() == 1 && $piece->getY() - $this->getY() == 1)
		|| ($this->getCouleur() == 2 && $piece->getY() - $this->getY() == -1));
	}
}
?>