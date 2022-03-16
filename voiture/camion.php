<?php
	require_once("vehicule.php");

	abstract class Camion extends Vehicule {
		private int $nbEssieu, $hauteur;
		private int $pdsRemorque;
		public function __construct(string $matri, string $clr, string $msg, int $pds, int $pui, int $place, int $nbEssieu, int $pdsRemorque, int $hauteur, float $capRes, float $essence, bool $assure, $permisRequis) {
			parent::__construct($matri, $clr, $msg, $pds, $pui, $place, $capRes, $essence, $assure, $permisRequis);
			$this->setNbEssieu($nbEssieu);
			$this->sethauteur($hauteur);
			$this->setPdsRemorque($pdsRemorque);
		}

		public function setNbEssieu(int $nbEssieu) {$this->nbEssieu = $nbEssieu;}
		public function setHauteur(int $hauteur) {$this->hauteur = $hauteur;}

		public function changePermisRequis() {
			if ($this->pdsRemorque > 750) $this->permisRequis = ["C1E", "CE"];
		}

		public function setPdsRemorque(int $pdsRemorque) {
			$this->pdsRemorque = $pdsRemorque;
		}
	}
?>