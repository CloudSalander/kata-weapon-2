<?php 
class Mace extends Weapon {

	public function __construct() {
		$this->range = 3.0;
		$this->damage = 8.0;
	}

	public function attack() {
			echo " crushed with her mace!";
	}
}
?>