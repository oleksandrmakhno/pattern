<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Facade/

include_once('ArrayCaseReverse.php');
include_once('ArrayStringFunctions.php');
include_once('Book.php');
include_once('CaseReverseFacade.php');

$book = new Book("title", "author");

echo "Original book title: " . $book->getTitle();
echo '<br />';

$bookTitleReversed = CaseReverseFacade::reverseStringCase($book->getTitle());

echo "Reversed book title: " . $bookTitleReversed;
echo '<br />';
