<?php
$nameServer = "localhost";
$userName = "root";
$password = "";
$dbName = "dz4db"; // название базы данных

/* Создаем соединение */
$mysqli = new mysqli($nameServer, $userName, $password, $dbName);

// тут проверяем, удалось соединится с сервером,
// если соединения нет, то останавливаем программу и выводим сообщение;
if ($mysqli -> connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
    exit();
}