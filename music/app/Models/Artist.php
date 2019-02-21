<?php

class Artist {
	protected $id;
	protected $name;
	protected $birthday;

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getBirthday() {
		return $this->birthday;
	}
}
