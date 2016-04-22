<?php

include_once('FlyweightBook.php');;

class FlyweightBookShelf
{
    private $books = array();

    public function addBook($book)
    {
        $this->books[] = $book;
    }

    public function showBooks()
    {
        $return_string = null;
        foreach ($this->books as $book) {
            $return_string .= 'title: ' . $book->getAuthor() . '  author: ' . $book->getTitle() . '<br />';
        };

        return $return_string;
    }
}