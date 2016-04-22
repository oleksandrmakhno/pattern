<?php

include_once('Book.php');
include_once('BookList.php');

class ProxyBookList
{
    private $bookList = null;

    // bookList is not instantiated at construct time
    public function __construct()
    {
    }

    public function getBookCount()
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        
        return $this->bookList->getBookCount();
    }

    public function addBook($book)
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        
        return $this->bookList->addBook($book);
    }

    public function getBook($bookNum)
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        
        return $this->bookList->getBook($bookNum);
    }

    public function removeBook($book)
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        
        return $this->bookList->removeBook($book);
    }

    // create 
    public function makeBookList()
    {
        $this->bookList = new bookList();
    }
}