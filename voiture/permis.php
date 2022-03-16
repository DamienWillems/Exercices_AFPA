<?php
	class Permis{
		private string $nom;
		private $permisBonus;
		private ?int $ageMin;

		public function __construct(string $nom, int $ageMin, $permisBonus = null){
			$this->setNom($nom);
			$this->setPermisBonus($permisBonus);
			$this->setAgeMin($ageMin);
		}

		//setters
		public function setNom($nom) {
			$this->nom = $nom;
		}

		public function setPermisBonus($permisBonus) {
			$this->permisBonus = $permisBonus;
		}

		public function setAgeMin($ageMin) {
			$this->ageMin = $ageMin;
		}

		//getters
		public function get($attr) {
			if(property_exists($this, $attr)) return $this->$attr;
		}

		public function verifPermis(int $age,  $permis=[], ?int $anciennete = null){
			if($this->ageMin > $age) return false; // Renvoie false si l'âge de la personne est inférieur à l'âge minimum requis pour avoir le permis
			if(isset($this->permisBonus)) foreach($this->permisBonus as $nom) if(!(isset($permis[$nom]) || $permis[$nom])) return false; // Renvoie false si
			return true;
		}
	}
?>