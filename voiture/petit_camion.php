<?php
	require_once("camion.php");

	class PetitCamion extends Camion {
		public function setPds(int $pds) {
			if ($pds < 3500 || $pds > 7500) return false;
			parent::setPds($pds);
		}
	}
?>