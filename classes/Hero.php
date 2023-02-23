<?php
	class Hero {
		private float  $life;
		private float  $magic;
		private string $name;
		private Weapon $main_weapon;
		
		public function __construct(float $life,float $magic,string $name,Weapon $main_weapon = null) 
		{
			$this->life = $life;
			$this->magic = $magic;
			$this->name = $name;
			$this->weapon = $main_weapon;
		}

		public function setWeapon(Weapon $weapon) {
			$this->weapon = $weapon;
		}

		public function useWeapon() {
			echo $this->name." ";
			$this->weapon->attack();
			echo '<br>';
		}
	}	
?>