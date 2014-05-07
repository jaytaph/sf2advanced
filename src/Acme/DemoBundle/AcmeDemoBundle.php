<?php

namespace Acme\DemoBundle;

use Acme\DemoBundle\DependencyInjection\CompilerPass\ImageLoaderCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeDemoBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ImageLoaderCompilerPass());
    }
}
