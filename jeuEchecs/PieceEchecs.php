<?php

abstract class PieceEchecs {
	private int $x, $y, $couleur;

	public function __construct($x, $y, $couleur) {
		$this->x = $x;
		$this->y = $y;
		$this->couleur = $couleur;
	}

	public function getCouleur() {
		return $this->couleur;
	}

	public function getCase() {
		return 2 - ($this->x + $this->y)%2;
	}

	public function getX() {
		return $this->x;
	}

	public function getY() {
		return $this->y;
	}

	public function setX($x) {
		$this->x = $x;
	}

	public function setY($y) {
		$this->y = $y;
	}

	public function setCouleur($couleur) {
		$this->couleur = $couleur;
	}

	public function estDansLEchiquier($x, $y) {
		return ($x > 0 && $x < 9 && $y > 0 && $y < 9);
	}

	public abstract function aller($x, $y);

	public function bouffer(PieceEchecs $piece) {
		return ($this->aller($piece->getX(), $piece->getY()) && $piece->getCouleur() != $this->getCouleur());
	}
}