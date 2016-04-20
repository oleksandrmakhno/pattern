<?php

include_once('SimpleBook.php');

class BookAdapter
{
    private $book;

    public function __construct(SimpleBook $book_in)
    {
        $this->book = $book_in;
    }

    public function getAuthorAndTitle()
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}