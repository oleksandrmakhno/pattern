<?php

include_once('FlyweightBook.php');

class FlyweightFactory
{
    private $books = array();

    public function __construct()
    {
        $this->books[1] = null;
        $this->books[2] = null;
        $this->books[3] = null;
    }

    public function getBook($bookKey)
    {
        if (null == $this->books[$bookKey]) {
            $makeFunction = 'makeBook' . $bookKey;
            $this->books[$bookKey] = $this->$makeFunction();
        }

        return $this->books[$bookKey];
    }

    // sort of an long way to do this, but hopefully easy to follow
    // how you really want to make flyweights would depend on what
    // your application needs.  this, while a little clumbsy looking,
    // does work well
    public function makeBook1()
    {
        $book = new FlyweightBook('author1', 'title1');

        return $book;
    }

    public function makeBook2()
    {
        $book = new FlyweightBook('author2', 'title2');

        return $book;
    }

    public function makeBook3()
    {
        $book = new FlyweightBook('author2', 'title3');

        return $book;
    }
}