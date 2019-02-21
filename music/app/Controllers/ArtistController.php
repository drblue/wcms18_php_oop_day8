<?php

namespace App\Controllers;

use \PDO;
use App\Models\Artist;

class ArtistController extends BaseController {
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

	public function getArtist($id) {
		return $this->queryId('artists', Artist::class, $id);
		/*
		$query = $this->dbh->prepare("SELECT * FROM artists WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject(Artist::class);
		*/
	}

	public function getArtists() {
		return $this->queryAll('artists', Artist::class);
		/*
		$query = $this->dbh->prepare("SELECT * FROM artists");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, Artist::class);
		*/
	}
}
