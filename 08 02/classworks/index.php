<?php

require_once 'book.php';

$book_1 = new Book('My Dark Vanessa','Kate Elizabeth Russell', 2021, 'Drama');
$book_2 = new Book('My Dark Vanessa','Kate Elizabeth Russell', 2021, 'Drama');
$book_3 = new Book('My Dark Vanessa','Kate Elizabeth Russell', 2021, 'Drama');

var_dump($book_1, $book_2, $book_3);