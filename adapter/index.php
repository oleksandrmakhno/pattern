<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Adapter/

include_once('SimpleBook.php');
include_once('BookAdapter.php');

$book = new SimpleBook("author", "title");

$bookAdapter = new BookAdapter($book);

echo 'Author and Title: ' . $bookAdapter->getAuthorAndTitle();
