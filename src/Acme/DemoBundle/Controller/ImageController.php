<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{

    public function indexAction()
    {
        $imageLoader = $this->get('acme.imageloader.service');
        $result = $imageLoader->load("test.gif");
//        $result = $imageLoader->load("test.png");
//        $result = $imageLoader->load("test.jpg");
//        $result = $imageLoader->load("http://youtube.com/movie/asfasfas");
        return new Response($result);
    }

}
