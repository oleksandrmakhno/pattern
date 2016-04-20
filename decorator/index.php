<?php

// https://sourcemaking.com/design_patterns/decorator/php 

require_once 'Book.php';
require_once 'BookTitleDecorator.php';
require_once 'BookTitleExclaimDecorator.php';
require_once 'BookTitleStarDecorator.php';

$patternBook = new Book('title', 'author');

$decorator = new BookTitleDecorator($patternBook);
$starDecorator = new BookTitleStarDecorator($decorator);
$exclaimDecorator = new BookTitleExclaimDecorator($decorator);

writeln('showing title : ');
writeln($decorator->showTitle());
writeln('');

writeln('showing title after two exclaims added : ');
$exclaimDecorator->exclaimTitle();
$exclaimDecorator->exclaimTitle();
writeln($decorator->showTitle());
writeln('');

writeln('showing title after star added : ');
$starDecorator->starTitle();
writeln($decorator->showTitle());
writeln('');

writeln('showing title after reset: ');
$decorator->resetTitle();
writeln($decorator->showTitle());
writeln('');

function writeln($line_in)
{
    echo $line_in . "<br/>";
}
