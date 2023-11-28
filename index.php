<?php

/*
// Подключение
$server_name = "Localhost"; // Создаем переменные
$username = "root";
$password = "";

$conn = mysqli_connect($server_name, $username, $password);
// Пробрасываем их в переменную с mysqli

if ($conn->connect_error) {
    die ("Connection failed" . mysqli_connect_error()); // Сообщение об ошибке
// Создаем условие, если происходит ошибка
}


// Создание БД
$sql = "CREATE DATABASE personDB";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully!";
} else {
    echo "Error" . mysqli_error($conn);
}

// Закрыть соединение
mysqli_close($conn);
*/


// ===============

/*
// Создаем таблицу БД
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE users (
        name VARCHAR (30) NOT NULL,
        age INT (30) NOT NULL PRIMARY KEY,
        email VARCHAR (30) NOT NULL)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error" . mysqli_error($conn);
}

$conn->close();
*/

?>