<?php

include_once('BookCommandee.php');

abstract class BookCommand
{
    protected $bookCommandee;

    public function __construct($bookCommandee_in)
    {
        $this->bookCommandee = $bookCommandee_in;
    }

    abstract function execute();
}
