<?php
$sql = "SELECT * FROM tasks";
$query = $pdo->prepare($sql);
$query->execute();
$tasks = $query->fetchAll();
?>
<? foreach ($tasks as $task) : ?>
    <form action="/config/taskDelete.php" method="post" class="mb-2">
    <ul>
        <input type="hidden" name="task_id" value="<?= $task['id'] ?>">
        <?= $task['task']?>  <button type="submit" name="del-task" class="btn btn-warning">Удапить</button>
    </ul>
    </form>
<? endforeach;  ?>
