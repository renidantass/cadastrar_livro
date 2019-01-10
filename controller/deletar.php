<?php
include '../model/Manager.class.php';

$Manager = new Manager();

if ((isset($_GET['z'])) && (!empty($_GET['z']))) {
    $id = filter_var($_GET['z'], FILTER_SANITIZE_STRING);
    $Manager->deleteBook("livros", $id);
}