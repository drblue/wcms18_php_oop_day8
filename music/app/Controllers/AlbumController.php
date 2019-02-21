<?php

namespace App\Controllers;

use \PDO;
use App\Models\Album;

class AlbumController extends BaseController {
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

	public function getAlbum($id) {
		return $this->queryId('albums', Album::class, $id);
	}

	public function getAlbums() {
		return $this->queryAll('albums', Album::class);
	}

	public function getAlbumsForArtist($artist_id) {
		$query = $this->dbh->prepare("SELECT * FROM albums WHERE artist_id = :artist_id");
		$query->bindParam(':artist_id', $artist_id);
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, Album::class);
	}
}
