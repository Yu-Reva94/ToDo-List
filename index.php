<?php require_once 'add.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Список дел</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Список дел</h1>
<form action="add.php" method="post" >
    <input type="text" name="task" id="task" class="form-control mb-2">
    <button type="submit" name="add-task" class="btn btn-success">Добавить</button>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?= $_SESSION['error'] ?>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
</form>
    <div class="container" class="tasks-list">
 <? require_once "config/taskList.php" ?>

    </div>
</body>
</html>