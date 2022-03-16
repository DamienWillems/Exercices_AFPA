<?php
class WESH {
	public const BLABLA = ["C1", "C", "C1E"];
	public $wi;

	public function vireTaMerde() {
		if($this->wi > 500) $this->BLABLA = ["C1E"];
	}

	public function setWi($wi) {
		$this->wi = $wi;
	}
	public function getBLABLA() {
		return $this->BLABLA;
	}
}
$non = new WESH();
$non->setWi(600);
$non->vireTaMerde();

var_dump($non);
echo "<br><br>";
var_dump($non->getBLABLA());