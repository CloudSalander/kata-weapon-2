<?php
class Shield extends Weapon {
	public  function __construct() {
		$this->range = 1.0;
		$this->damage = 0.0;
	}

	public function attack() {
		echo " attacked with the sword!";
	}
}
?>