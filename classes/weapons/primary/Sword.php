<?php 
class Sword extends Weapon {

	public __construct function() {
		$this->range = 2.0;
		$this->damage = 4.0;
	}
	
	public function attack() {
			echo " attacked with the sword!";
	}
}
?>