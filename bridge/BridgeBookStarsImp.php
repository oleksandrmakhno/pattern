<?php

include_once('BridgeBookImp.php');

class BridgeBookStarsImp extends BridgeBookImp
{
    public function showAuthor($author_in)
    {
        return str_replace(" ", "*", $author_in);
    }

    public function showTitle($title_in)
    {
        return str_replace(" ", "*", $title_in);
    }
}