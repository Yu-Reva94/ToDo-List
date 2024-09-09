<?php
require_once "config/connect.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add-task'])) {

    $work = trim($_POST['task']);
    if ($work == '') {
        $_SESSION['error'] = "Заполните поля с задачей";
    } else {
        $sql = "INSERT INTO tasks (task) VALUES (?)";
        $query = $pdo->prepare($sql);
        $query->execute([$work]);
    }
    header('Location: index.php');
}