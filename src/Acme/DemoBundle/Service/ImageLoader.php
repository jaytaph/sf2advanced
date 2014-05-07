<?php

namespace Acme\DemoBundle\Service;

class ImageLoader {

    protected $loaders = array();

    public function addLoader(ImageLoaderInterface $loader) {
        $this->loaders[] = $loader;
    }

    public function load($path) {
        foreach ($this->loaders as $loader) {
            if ($loader->canLoad($path)) {
                return $loader->load($path);
            }
        }
        throw new LoaderException("Unknown image type");
    }

}
