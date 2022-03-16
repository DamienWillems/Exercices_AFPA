<?php
	class Personne{
		private string $nom, $prenom, $civilite, $telephone;
		private ?int $age;
		private $permis = [];

		public function __construct(string $nom, string $prenom, string $civilite, string $telephone, int $age) {
			$this->setNom($nom);
			$this->setPrenom($prenom);
			$this->setCivilite($civilite);
			$this->setTel($telephone);
			$this->setAge($age);
		}
		
		//Setters
		public function setNom(string $nom) {$this->nom = $nom;}
		public function setPrenom(string $prenom) {$this->prenom = $prenom;}
		
		public function setCivilite(string $civilite) {
			if(strtolower($civilite) == "m" || strtolower($civilite) == "monsieur") $this->civilite = "Monsieur";
			elseif(strtolower($civilite) == "mme" || strtolower($civilite) == "madame") $this->civilite = "Madame";
			else return false;
		}
		
		public function setTel(string $telephone) {
			$regex = "/^0{1}[0-9]{9}$/";
			if (preg_match($regex, $telephone)) $this->telephone = $telephone;
			else return false;
		}
		
		public function setAge(int $age) {$this->age = abs($age);}

		public function setPermis(Permis $permis) {
			$this->permis[$permis->get("nom")]=$permis->verifPermis($this->age, $this->permis);
		}

		public function unsetPermis(Permis $permis) {
			$this->permis[$permis->get("nom")]=false;
		}

		//Getters
		public function getPermis($idPermis = null){
			if ($idPermis === null) return $this->permis;
			if (isset($this->permis[$idPermis])) return $this->permis[$idPermis];
			return false;
		}

		public function get($attr) {
			if(property_exists($this, $attr)) return $this->$attr;
			return false;
		}
	}
?>