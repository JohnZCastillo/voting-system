<?php

class Link
{


    private static $link = "http://localhost/voting-system";

    public static function getLink()
    {
        return Link::$link;
    }
}
