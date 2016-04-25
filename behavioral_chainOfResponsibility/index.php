<?php

// http://www.fluffycat.com/PHP-Design-Patterns/Chain-Of-Responsibility/

include_once('AbstractBookTopic.php');
include_once('BookTopic.php');
include_once('BookSubTopic.php');
include_once('BookSubSubTopic.php');

$bookTopic = new BookTopic("topic1");
writeln("bookTopic before title is set:");
writeln("topic: " . $bookTopic->getTopic());
writeln("title: " . $bookTopic->getTitle());
writeln("");
$bookTopic->setTitle("title1");
writeln("bookTopic after title is set: ");
writeln("topic: " . $bookTopic->getTopic());
writeln("title: " . $bookTopic->getTitle());
writeln("");

$bookSubTopic = new BookSubTopic("topic2", $bookTopic);
writeln("bookSubTopic before title is set: ");
writeln("topic: " . $bookSubTopic->getTopic());
writeln("title: " . $bookSubTopic->getTitle());
writeln("");
$bookSubTopic->setTitle("title2");
writeln("bookSubTopic after title is set: ");
writeln("topic: " . $bookSubTopic->getTopic());
writeln("title: " . $bookSubTopic->getTitle());
writeln("");

$bookSubSubTopic = new BookSubSubTopic("topic3", $bookSubTopic);
writeln("bookSubSubTopic with no title set: ");
writeln("topic: " . $bookSubSubTopic->getTopic());
writeln("title: " . $bookSubSubTopic->getTitle());
writeln("");
$bookSubTopic->setTitle(null);
writeln("bookSubSubTopic with no title for set for bookSubTopic either:");
writeln("topic: " . $bookSubSubTopic->getTopic());
writeln("title: " . $bookSubSubTopic->getTitle());
writeln("");

function writeln($line_in)
{
    echo $line_in . "<" . "BR" . ">";
}
