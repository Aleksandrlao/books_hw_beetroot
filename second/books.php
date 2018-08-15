<?php

require_once 'data.php';

$bookView = '';
foreach ($book as $item) {
    $bookFront = $item->printInfo2();

    $bookView .= '<div class="book_item'.$bookFront['css'].'">';
    $bookView .= '<div class="book_thumb"><img src="'.$bookFront['thumb'].'" alt="'.$bookFront['name'].'" /></div>';
    $bookView .= '<div class="book_info"><a href="'.$bookFront['file_path'].'">'.$bookFront['name'].'</a>';
    $bookView .= '<div class="book_data">Автор: '.$bookFront['author'].', Год публикации: '.$bookFront['public_year'].'</div>';
    $bookView .= '<div class="book_desc">'.$bookFront['description'].'</div></div>';
    $bookView .= '</div>';

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
        <?php echo $bookView; ?>
    </div>
</body>
</html>
