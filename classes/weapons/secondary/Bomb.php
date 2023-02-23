<?php
class Bomb extends Weapon {
	public  function __construct() {
		$this->range = 4.0;
		$this->damage = 10.0;
	}

	public function attack() {
		echo " threw a bomb to distance ".$this->range." and made ".$this->damage." damage!\n";
	}
}

?>