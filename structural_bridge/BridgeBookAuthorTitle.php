<?php

include_once('BridgeBook.php');;

class BridgeBookAuthorTitle extends BridgeBook
{
    public function showAuthorTitle()
    {
        return $this->showAuthor() . "'s " . $this->showTitle();
    }
}