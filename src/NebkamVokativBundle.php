<?php

namespace Nebkam\Vokativ;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class NebkamVokativBundle extends Bundle
    {
    public function build(ContainerBuilder $container)
        {
        parent::build($container);

        $extension = new NebkamVokativExtension();
        $extension->load(array(), $container);

        $container->registerExtension($extension);
        }
    } 
