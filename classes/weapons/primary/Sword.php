<?php 
class Sword extends Weapon {

	public  function __construct() {
		$this->range = 2.0;
		$this->damage = 4.0;
	}

	public function attack() {
			echo " attacked with the sword to distance ".$this->range." and made ".$this->damage." damage!\n";
	}
}
?>