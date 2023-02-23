<?php
		abstract class Weapon {
			protected string $name;
			public function __construct() {
				$this->name = get_class($this);
			}
			abstract function attack(); 
		}
?>