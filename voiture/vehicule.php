<?php
	abstract class Vehicule {
		private string $matri, $clr, $msg; // Respectivement Immatriculation, Couleur, Message du tableau de bord.
		private int $pds, $pui, $place; // Respectivement Poids, Puissance, Nombre de places.
		private float $capRes, $essence; // Respectivement Capacité du réservoir, Niveau d'essence.
		private bool $assure;
		private $permisRequis = [];
		private $proprietaire;
		const CONSO = ["130" =>.12, "90" =>.08, "50" => .05, "0" => .1];

		public function __construct(string $matri, string $clr, string $msg, int $pds, int $pui, int $place, float $capRes, float $essence, bool $assure, $permisRequis = null) {
			$this->setMatri($matri);
			$this->setClr($clr);
			$this->setMsg($msg);
			$this->setPds($pds);
			$this->setPui($pui);
			$this->setPlace($place);
			$this->setCapRes($capRes);
			$this->setEssence(5);
			$this->setAssure(false);
			$this->setPermisRequis($permisRequis);
			$this->proprietaire = null;
		}

		//Getters
		public function get($attr) {
			if(property_exists($this, $attr)) return $this->$attr;
			return false;
		}


		//Setters
		public function setMatri($matri) {
			$regex = "/^((?!I|O|U)[A-Z]){2}-[0-9]{3}-((?!I|O|U)[A-Z]){2}$/";
			if(preg_match($regex, $matri)) $this->matri = $matri;
			else return false;
		}

		public function setClr(string $clr) {$this->clr = $clr;}
		public function setMsg(string $msg) {$this->msg = $msg;}
		public function setPds(int $pds) {$this->pds = $pds;}
		public function setPui(int $pui) {$this->pui = $pui;}
		public function setPlace(int $place) {$this->place = $place;}
		public function setCapRes(float $capRes) {$this->capRes = $capRes;}
		public function setEssence(float $essence) {$this->essence = $essence;}
		public function setProprietaire(&$proprietaire) {$this->proprietaire = $proprietaire;}
		public function setAutorisation(bool $autorisation) {$this->autorisation = $autorisation;}

		public function setAssure(bool $assure) {
			$this->assure = $assure;
			if ($assure == true) $this->msg = "Félicitations ! Votre véhicule est assuré !";
			else $this->msg = "Attention ! Votre véhicule n'est pas assuré !";
		}

		public function setPermisRequis($permisRequis) {
			$this->permisRequis = $permisRequis;
		}


		//Autres méthodes
		public function repeindre(string $clr = null) {
			if (isset($clr) && $clr != "" && $this->clr != $clr) {
				$this->msg = "La couleur a changé en " . strtolower($clr) .  " !";
				$this->clr = $clr;
			} else {
				$this->msg = "Le " . strtolower($this->clr) . " a été rafraîchi !";
			}
		}

		public function ajoutEssence (float $ajout) {
			if ($this->essence + $ajout > $this->capRes) {
				$this->msg = "Attention, vous dépassez la capacité maximale du réservoir !";
			} else {
				$this->essence += $ajout;
				$this->msg = "Vous avez ajouté {$ajout}L d'essence ! Vous possédez maintenant " . $this->essence . "L d'essence dans votre réservoir.";
			}
		}
		
		public function seDeplacer($conso, $vitesse) {
			if($conso < $this->essence) {
				$this->essence -= $conso;
				$this->msg = "Vous avez consommé {$conso}L d'essence. Il vous en reste $this->essence.";
			} else $this->msg = "Vous n'avez pas assez d'essence pour ce trajet. Avec une vitesse moyenne de " . abs($vitesse) . " km/h, il vous faut {$conso}L et vous en avez {$this->essence}. Il vous en manque donc " . $conso - $this->essence . ".";
		}

		public function conso(float $vitesse, float $distance) {
			foreach (self::CONSO as $key => $coef) 
				if(abs($vitesse) > $key) return $this->seDeplacer($coef * $distance, $vitesse);
		}
		
		public function habilitation() {
			if (!isset($this->permisRequis)) return true;
			else foreach ($this->permisRequis as $nom) if($this->get("proprietaire")->getPermis($nom)) return true;
			return false;
		}
	}
?>