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

	// atualizar registro do livro
	public function editBook($table, $data, $id) {
		$pdo = parent::getInstance();
		$new_values = "";
		foreach ($data as $key => $value) {
			$new_values .= "$key = :$key, ";
		}
		$new_values = substr($new_values, 0, -2);
		$statement = $pdo->prepare("UPDATE $table SET $new_values WHERE id = :id");
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key", $value);
		}
		$result = $statement->execute();
		if ($result) {
			header("Location: ../index.php?book_edited");
		}
	}

	// deletar livro
	public function deleteBook($table, $id) {
		$pdo = parent::getInstance();
		$statement = $pdo->prepare("DELETE FROM $table WHERE id = :id");
		$statement->bindValue(":id", $id);
		$result = $statement->execute();
		if ($result) {
			header("Location: ../index.php?book_deleted");
		}
	}

	// conseguir informações do livro
	public function getInfo($table, $id) {
		$pdo = parent::getInstance();
		$statement = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
		$statement->bindValue(":id", $id);
		$statement->execute();
		return $statement->fetchAll();
	}
}