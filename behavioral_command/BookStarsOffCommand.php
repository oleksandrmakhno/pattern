<?php

include_once('BookCommand.php');

class BookStarsOffCommand extends BookCommand
{
    public function execute()
    {
        $this->bookCommandee->setStarsOff();
    }
}
