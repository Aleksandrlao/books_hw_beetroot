<?php

require_once 'classes.php';
require_once 'components/connect.php';

$book = array();

$dbConnection = getConnection();
//var_dump($dbConnection);

$bookListDB = $dbConnection->query("SELECT * FROM book_list");

while ($row = $bookListDB->fetch()) {
    $bookType = $row['type'].'2';
    $book[] = new $bookType($row);
}

