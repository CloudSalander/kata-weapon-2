<?php
	class Hero {
		private float  $life;
		private float  $magic;
		private string $name;
		private ?Weapon $main_weapon;
		private ?Weapon $secondary_weapon;
		
		public function __construct(float $life,float $magic,string $name,Weapon $main_weapon = null, Weapon $secondary_weapon = null) 
		{
			$this->life = $life;
			$this->magic = $magic;
			$this->name = $name;
			$this->main_weapon = $main_weapon;
			$this->secondary_weapon = $secondary_weapon;
		}

		public function setPrimaryWeapon(Weapon $weapon) {
			$this->main_weapon = $weapon;
		}

		public function setSecondaryWeapon(Weapon $weapon) {
			$this->secondary_weapon = $weapon;
		}

		public function usePrimaryWeapon() {
			if(isset($this->main_weapon)) {
				echo $this->name." ";
				$this->main_weapon->attack();	
			}
			else echo "No primary weapon assigned!\n";
		}

		public function useSecondaryWeapon() {
			if(isset($this->secondary_weapon)) {
				echo $this->name." ";
				$this->secondary_weapon->attack();
			}
			else echo "No secondary weapon assigned!\n";
		}
	}	
?>