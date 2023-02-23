<?php

require('classes/Hero.php');
require('classes/weapons/Weapon.php');
require('classes/weapons/primary/Mace.php');
require('classes/weapons/primary/Sword.php');
require('classes/weapons/primary/Bow.php');
require('classes/weapons/secondary/Bomb.php');
require('classes/weapons/secondary/Shield.php');

$hero = new Hero(20,15,"Cloud");

$hero->setPrimaryWeapon(new Sword());
$hero->usePrimaryWeapon();
	
$hero->setSecondaryWeapon(new Bomb());
$hero->useSecondaryWeapon();


?>