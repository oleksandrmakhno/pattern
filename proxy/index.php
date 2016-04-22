<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Proxy/

include_once('ProxyBookList.php');
include_once('Book.php');

$proxyBookList = new ProxyBookList();

$inBook = new Book('PHP for Cats','Larry Truett');

$proxyBookList->addBook($inBook);

echo 'test 1 - show the book count after a book is added';
echo '<br />';
echo $proxyBookList->getBookCount();
echo '<br />';
echo '<br />';

echo 'test 2 - show the book';
echo '<br />';
$outBook = $proxyBookList->getBook(1);
echo $outBook->getAuthorAndTitle();
echo '<br />';
echo '<br />';

$proxyBookList->removeBook($outBook);

echo 'test 3 - show the book count after a book is removed';
echo '<br />';
echo $proxyBookList->getBookCount();
