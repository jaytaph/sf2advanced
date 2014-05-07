<?php

namespace Acme\DemoBundle\Service\Loaders;

use Acme\DemoBundle\Service\ImageLoaderInterface;

class Gif implements ImageLoaderInterface
{
    function canLoad($path)
    {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return (strtolower($ext) == "gif");
    }

    function load($path)
    {
        print "Loaded a GIF file";
    }

}
