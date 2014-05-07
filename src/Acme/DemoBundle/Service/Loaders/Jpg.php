<?php

namespace Acme\DemoBundle\Service\Loaders;

use Acme\DemoBundle\Service\ImageLoaderInterface;

class Jpg implements ImageLoaderInterface
{
    function canLoad($path)
    {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return (strtolower($ext) == "jpg");
    }

    function load($path)
    {
        print "Loaded a JPEG file";
    }

}
