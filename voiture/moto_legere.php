<?php
	require_once ("vehicule.php");

	class MotoLegere extends Vehicule{
		public function setPds(int $pds) {
			if($pds > 125) return false;
			parent::setPds($pds);
		}
	}
?>