<?php

namespace App\Models;

class Track {
	protected $id;
	protected $album_id;
	protected $name;
	protected $length;

	public function getId() {
		return $this->id;
	}

	public function getAlbumId() {
		return $this->album_id;
	}

	public function getName() {
		return $this->name;
	}

	public function getLength() {
		return $this->length;
	}
}
