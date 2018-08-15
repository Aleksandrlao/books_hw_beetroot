<?php

//echo $_SERVER['HTTP_HOST'];

/*
 * Получаем объект для работы с базой данных
 * */
function getConnection() {
    try {
        $dbConfig = [
                'host' => 'localhost',
                'db' => 'book',
                'user' => 'root',
                'pass' => '',
                'charset' => 'utf8',
            ];
        $host = $dbConfig['host'];
        $db   = $dbConfig['db'];
        $user = $dbConfig['user'];
        $pass = $dbConfig['pass'];
        $charset = $dbConfig['charset'];

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        return $pdo = new PDO($dsn, $user, $pass, $opt);

    } catch (Exception $e) {
        die ('disconnect ' . $e->getMessage());
    }
}
