<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Composite/

include_once('OnTheBookShelf.php');
include_once('OneBook.php');
include_once('SeveralBooks.php');

$firstBook = new OneBook("title", "author");
echo "(after creating first book) oneBook info:";
echo '<br />';
echo $firstBook->getBookInfo(1);
echo '<br />';
echo '<br />';

$secondBook = new OneBook("title", "author");
echo "(after creating second book) oneBook info: ";
echo '<br />';
echo $secondBook->getBookInfo(1);
echo '<br />';
echo '<br />';

$thirdBook = new OneBook("title", "author");
echo "(after creating third book) oneBook info: " ;
echo '<br />';
echo $thirdBook->getBookInfo(1);
echo '<br />';
echo '<br />';

$books = new SeveralBooks();

$booksCount = $books->addBook($firstBook);
echo "(after adding firstBook to books) SeveralBooks info : ";
echo '<br />';
echo $books->getBookInfo($booksCount);
echo '<br />';
echo '<br />';

$booksCount = $books->addBook($secondBook);
echo "(after adding secondBook to books) SeveralBooks info : ";
echo '<br />';
echo $books->getBookInfo($booksCount);
echo '<br />';
echo '<br />';

$booksCount = $books->addBook($thirdBook);
echo "(after adding thirdBook to books) SeveralBooks info : ";
echo '<br />';
echo $books->getBookInfo($booksCount);
echo '<br />';
echo '<br />';

$booksCount = $books->removeBook($firstBook);
echo "(after removing firstBook from books) SeveralBooks count : ";
echo $books->getBookCount();
echo '<br />';
echo '<br />';

echo "(after removing firstBook from books) SeveralBooks info 1 : ";
echo '<br />';
echo $books->getBookInfo(1);
echo '<br />';
echo '<br />';

echo "(after removing firstBook from books) SeveralBooks info 2 : ";
echo '<br />';
echo $books->getBookInfo(2);
echo '<br />';
echo '<br />';
