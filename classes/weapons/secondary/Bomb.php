<?php
class Bomb extends Weapon {
		public __construct function() {
			$this->range = 4.0;
			$this->damage = 10.0;
		}

		public function attack() {
			echo " attacked with the sword!";
		}
}

?>