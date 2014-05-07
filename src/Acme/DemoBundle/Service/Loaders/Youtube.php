<?php

namespace Acme\DemoBundle\Service\Loaders;

use Acme\DemoBundle\Service\ImageLoaderInterface;

class Youtube implements ImageLoaderInterface
{
    function canLoad($path)
    {
        return (strpos($path, "http://youtube.com/") === 0);
    }

    function load($path)
    {
        print "Loaded a screenshot from a youtube movie";
    }

}
