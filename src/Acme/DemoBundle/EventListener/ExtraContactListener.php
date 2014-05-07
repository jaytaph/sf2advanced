<?php

namespace Acme\DemoBundle\EventListener;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class ExtraContactListener
{
    protected $registry;

    public function __construct(Registry $registry) {
        $this->registry = $registry;
    }


    public function onContactSubmit(GenericEvent $event)
    {
        $request = $event->getArgument('request');

        $manager = $this->registry->getManager();

        // Log the contact into a database

        $request->getSession()->getFlashBag()->add('notice', 'Stored in the database!');
    }
}
