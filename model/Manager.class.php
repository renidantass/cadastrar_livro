<?php
require_once 'Connection.class.php';

class Manager extends Connection {
	// adicionar livro
	public function addBook($table, $data) {
		$pdo = parent::getInstance();
		$keys = implode(', ', array_keys($data));
		$values = ':'.implode(', :', array_keys($data));
		$statement = $pdo->prepare("INSERT INTO $table ($keys) VALUES($values)");
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key", $value);
		}
		$result = $statement->execute();
		if ($result) {
			header("Location: ../index.php?book_added");
		}
	}

	// listar livros
	public function listBooks($table) {
		$pdo = parent::getInstance();
		$statement = $pdo->query("SELECT * FROM $table LIMIT 5");
		$statement->execute();
		return $statement->fetchAll();
	}
}