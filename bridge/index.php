<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Bridge/

include_once('BridgeBookAuthorTitle.php');
include_once('BridgeBookTitleAuthor.php');

$book = new BridgeBookAuthorTitle('Larry Truett', 'PHP for Cats', 'CAPS');
echo $book->showAuthorTitle();
echo '<br />';

$book = new BridgeBookAuthorTitle('Larry Truett', 'PHP for Cats', 'STARS');
echo $book->showAuthorTitle();
echo '<br />';

$book = new BridgeBookTitleAuthor('Larry Truett', 'PHP for Cats', 'CAPS');
echo $book->showTitleAuthor();
echo '<br />';

$book = new BridgeBookTitleAuthor('Larry Truett', 'PHP for Cats', 'STARS');
echo $book->showTitleAuthor();
echo '<br />';
