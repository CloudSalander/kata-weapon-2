<?php

require('classes/Hero.php');
require('classes/weapons/Mace.php');
require('classes/weapons/Sword.php');
require('classes/weapons/Bow.php');

$hero = new Hero(20,15,"Cloud");

$hero->setWeapon(new Sword());
$hero->useWeapon();
	
$hero->setWeapon(new Bow());
$hero->useWeapon();

$hero->setWeapon(new Mace());
$hero->useWeapon();


?>