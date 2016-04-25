<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Iterator/

include_once('Book.php');
include_once('BookList.php');
include_once('BookListIterator.php');
include_once('BookListReverseIterator.php');

$firstBook = new Book("title1", "author1");
$secondBook = new Book("title2", "author2");
$thirdBook = new Book("title3", "author3");

$books = new BookList();
$books->addBook($firstBook);
$books->addBook($secondBook);
$books->addBook($thirdBook);

echo "Testing the Iterator";
echo '<br />';

$booksIterator = new BookListIterator($books);

while ($booksIterator->hasNextBook()) {
    $book = $booksIterator->getNextBook();
    echo "getting next book with iterator : ";
    echo '<br />';
    echo $book->getAuthorAndTitle();
    echo '<br />';
    echo '<br />';
}

$book = $booksIterator->getCurrentBook();
echo "getting current book with iterator : ";
echo '<br />';
echo $book->getAuthorAndTitle();
echo '<br />';
echo '<br />';

echo '<br />';
echo "Testing the Reverse Iterator";
echo '<br />';

$booksReverseIterator = new BookListReverseIterator($books);

while ($booksReverseIterator->hasNextBook()) {
    $book = $booksReverseIterator->getNextBook();
    echo "getting next book with reverse iterator : ";
    echo '<br />';
    echo $book->getAuthorAndTitle();
    echo '<br />';
    echo '<br />';
}

$book = $booksReverseIterator->getCurrentBook();
echo "getting current book with reverse iterator : ";
echo '<br />';
echo $book->getAuthorAndTitle();
