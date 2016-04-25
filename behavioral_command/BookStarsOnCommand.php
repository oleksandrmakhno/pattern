<?php

include_once('BookCommand.php');

class BookStarsOnCommand extends BookCommand
{
    public function execute()
    {
        $this->bookCommandee->setStarsOn();
    }
}
