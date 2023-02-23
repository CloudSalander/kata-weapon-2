<?php
		abstract class Weapon {
			protected string $name;
			protected float  $range;
			protected float  $damage;

			public function __construct() {
				$this->name = get_class($this);
			}
			abstract function attack(); 
		}
?>