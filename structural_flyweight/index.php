<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Flyweight/

include_once('FlyweightBook.php');
include_once('FlyweightBookShelf.php');
include_once('FlyweightFactory.php');

$flyweightFactory = new FlyweightFactory();
$flyweightBookShelf1 = new FlyweightBookShelf();
$flyweightBook1 = $flyweightFactory->getBook(1);
$flyweightBookShelf1->addBook($flyweightBook1);
$flyweightBook2 = $flyweightFactory->getBook(1);
$flyweightBookShelf1->addBook($flyweightBook2);

echo 'test 1 - show the two books are the same book';
echo '<br />';
if ($flyweightBook1 === $flyweightBook2) {
    echo '1 and 2 are the same';
} else {
    echo '1 and 2 are not the same';
}
echo '<br />';
echo '<br />';

echo 'test 2 - with one book on one self twice';
echo '<br />';
echo $flyweightBookShelf1->showBooks();
echo '<br />';

$flyweightBookShelf2 = new FlyweightBookShelf();
$flyweightBook1 = $flyweightFactory->getBook(2);
$flyweightBookShelf2->addBook($flyweightBook1);
$flyweightBookShelf1->addBook($flyweightBook1);

echo 'test 3 - book shelf one';
echo '<br />';
echo $flyweightBookShelf1->showBooks();
echo '<br />';

echo 'test 4 - book shelf two';
echo '<br />';
echo $flyweightBookShelf2->showBooks();
