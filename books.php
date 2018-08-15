<?php

require_once 'data.php';

$bookFront = '';
foreach ($book as $item) {
    $bookFront .= $item->printInfo();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Книжная лавка</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="book_list">
        <?php echo $bookFront; ?>
    </div>
</body>
</html>
