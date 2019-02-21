<?php

namespace App\Controllers;

use \PDO;
use App\Models\Track;

class TrackController {
	protected $dbh;

	public function __construct() {
		// connect to db via PDO
		// and get db handle
		$this->dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
	}

	/*
	public function createGuest($name, $email, $phone) {
		$query = $this->dbh->prepare("INSERT INTO guests (name, email, phone) VALUES (:name, :email, :phone)");
		$query->bindParam(':name', $name);
		$query->bindParam(':email', $email);
		$query->bindParam(':phone', $phone);
		return $query->execute();
	}
	*/

	public function getTrack($id) {
		$query = $this->dbh->prepare("SELECT * FROM tracks WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject(Track::class);
	}

	public function getTracks() {
		$query = $this->dbh->prepare("SELECT * FROM tracks");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, Track::class);
	}

	public function getTracksForAlbum($album_id) {
		$query = $this->dbh->prepare("SELECT * FROM tracks WHERE album_id = :album_id");
		$query->bindParam(':album_id', $album_id);
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, Track::class);
	}
}
