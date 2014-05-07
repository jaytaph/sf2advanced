<?php

namespace Acme\DemoBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ImageLoaderCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (! $container->hasDefinition('acme.imageloader.service')) {
            return;
        }

        $definition = $container->getDefinition('acme.imageloader.service');

        $taggedServices = $container->findTaggedServiceIds('acme.image.loader');
        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall('addLoader', array(new Reference($id)));
        }
    }
}
