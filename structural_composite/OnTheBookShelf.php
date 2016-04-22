<?php

abstract class OnTheBookShelf
{
    abstract function getBookInfo($previousBook);

    abstract function getBookCount();

    abstract function setBookCount($new_count);

    abstract function addBook($oneBook);

    abstract function removeBook($oneBook);
}