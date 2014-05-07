<?php

namespace Acme\DemoBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class ContactListener
{
    protected $mailer;

    public function __construct(\Swift_Mailer $mailer) {
        $this->mailer = $mailer;
    }


    public function onContactSubmit(GenericEvent $event)
    {
        $request = $event->getArgument('request');

        // Send out email

        // Set the flag that we have sent the message
        $request->getSession()->getFlashBag()->add('notice', 'Message sent!');
    }
}
