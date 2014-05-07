<?php

namespace Acme\DemoBundle\Service\Loaders;

use Acme\DemoBundle\Service\ImageLoaderInterface;

class Png implements ImageLoaderInterface
{
    function canLoad($path)
    {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return (strtolower($ext) == "png");
    }

    function load($path)
    {
        print "Loaded a PNG file";
    }

}
