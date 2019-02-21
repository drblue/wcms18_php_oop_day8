<?php

require("includes/TalkInterface.php");
require("includes/Cat.php");
require("includes/Dog.php");
require("includes/Fish.php");
require("includes/Hamster.php");

$zoo = [];
$dog = new Dog("Nando", "Spanish Stray-dog");
$cat = new Cat("Melvin", "House Cat");
$fish = new Fish("Doris", "Clown Fish");
$hamster = new Hamster("Fat Louie", "Gold Hamster");

array_push($zoo, $dog, $cat, $fish, $hamster);

foreach ($zoo as $animal) {
	echo "<p>";
	echo "Class: " . get_class($animal) . ". ";
	echo $animal->sayHi() . "<br>";
	if ($animal instanceof TalkInterface) {
		echo $animal->talk();
	}
	echo "</p>";
}
