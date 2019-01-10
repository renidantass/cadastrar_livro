<?php
include '../model/Manager.class.php';

$data = $_POST;
$id = $_POST['id'];

if ((isset($data) && (!empty($data)))) {
    $Manager = new Manager();
    $Manager->editBook('livros', $data, $id);
}