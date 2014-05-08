<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LatLongType extends AbstractType {


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add($options['latitude_name'], 'text', $options['options']);
        $builder->add($options['longitude_name'], 'text', $options['options']);
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'options' => array(),
            'latitude_name' => 'latitude',
            'longitude_name' => 'longitude',
            'map_width' => 300,
            'map_height' => 300,
        ));
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['map_width'] = $options['map_width'];
        $view->vars['map_height'] = $options['map_height'];
    }


    public function getParent()
    {
        return "form";
    }


    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return "latlong";
    }


}
