<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=ToDo;charset=utf8', 'root', '');
    } catch (PDOException $i){
        die("Ошибка подключения к базе данных");
}