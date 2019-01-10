<?php

include '../model/Manager.class.php';

$Manager = new Manager();
$data = $_POST;

if ((!empty($data)) && (isset($data))) {
    $Manager->addBook("livros", $data);
}