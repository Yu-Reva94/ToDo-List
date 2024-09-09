<?php
require_once "connect.php";;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['del-task'])) {
    $id = $_POST["task_id"];


    $sql = "DELETE FROM tasks WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([':id' => $id]);
    header('Location: ../index.php');
}