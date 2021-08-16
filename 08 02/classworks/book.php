<?php
//namespace

class Book
{
    public $title;
    public $author;
    public $year;
    public $genre;

    function __construct ($bookName, $bookAuthor, $bookYear, $bookGenre,)
    {
        $this->title  = $bookName;
        $this->author = $bookAuthor;
        $this->year   = $bookYear;
        $this->genre  = $bookGenre;

    }
}