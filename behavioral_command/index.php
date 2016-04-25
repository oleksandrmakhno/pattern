<?php

include_once('BookCommandee.php');
include_once('BookCommand.php');
include_once('BookStarsOnCommand.php');
include_once('BookStarsOffCommand.php');

$book = new BookCommandee("title Title", "author Author");
echo "book after creation: ";
echo '<br />';
echo $book->getAuthorAndTitle();
echo '<br />';
echo '<br />';

$starsOn = new BookStarsOnCommand($book);
callCommand($starsOn);
echo "book after stars on: ";
echo '<br />';
echo $book->getAuthorAndTitle();
echo '<br />';
echo '<br />';

$starsOff = new BookStarsOffCommand($book);
callCommand($starsOff);
echo "book after stars off: ";
echo '<br />';
echo $book->getAuthorAndTitle();
echo '<br />';
echo '<br />';

// the callCommand function demonstrates that a specified
// function in BookCommandee can be executed with only
// an instance of BookCommand
function callCommand(BookCommand $bookCommand_in)
{
    $bookCommand_in->execute();
}
