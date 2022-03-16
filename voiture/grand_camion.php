<?php
	require_once("camion.php");

	class GrandCamion extends Camion {
		public function setPds(int $pds) {
			if ($pds <= 7500) return false;
			parent::setPds($pds);
		}
	}
?>