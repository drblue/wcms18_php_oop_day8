<?php

class Dog implements TalkInterface {
	protected $name;
	protected $breed;

	public function __construct($name, $breed) {
		$this->name = $name;
		$this->breed = $breed;
	}

	public function talk() {
		return "Woof!";
	}

	public function sayHi() {
		return "Hello, my name is {$this->name} and I am a {$this->breed}.";
	}
}
