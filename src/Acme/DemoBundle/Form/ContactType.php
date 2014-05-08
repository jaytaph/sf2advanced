<?php

namespace Acme\DemoBundle\Form;

use Acme\DemoBundle\Validator\Constraints\LatLong;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
        $builder->add('message', 'textarea');
        $builder->add('coords', 'latlong', array('constraints' => array(
            new LatLong(),
        )));
    }

    public function getName()
    {
        return 'contact';
    }
}
