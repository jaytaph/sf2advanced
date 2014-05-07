<?php

namespace Acme\DemoBundle\Service;

interface ImageLoaderInterface {

    function canLoad($path);
    function load($path);

}
