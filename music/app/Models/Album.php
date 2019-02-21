<?php

namespace App\Models;

class Album {
	protected $id;
	protected $artist_id;
	protected $name;
	protected $genre;

	public function getId() {
		return $this->id;
	}

	public function getArtistId() {
		return $this->artist_id;
	}

	public function getName() {
		return $this->name;
	}

	public function getGenre() {
		return $this->genre;
	}
}
