<?php 
class Bow extends Weapon {

	public  function __construct() {
		$this->range = 8.0;
		$this->damage = 1.5;
	}

	public function attack() {
			echo " threw an arrow!";
	}
}
?>