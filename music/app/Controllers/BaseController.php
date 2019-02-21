<?php

namespace App\Controllers;

use \PDO;

class BaseController {

	protected function queryId($table, $type, $id) {
		$query = $this->dbh->prepare("SELECT * FROM {$table} WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject($type);
	}

	protected function queryAll($table, $type) {
		$query = $this->dbh->prepare("SELECT * FROM {$table}");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $type);
	}
}
