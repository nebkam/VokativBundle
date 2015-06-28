<?php

namespace NebKam\VokativBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class NebKamVokativBundle extends Bundle
    {
    public function build(ContainerBuilder $container)
        {
        parent::build($container);

        $extension = new NebKamVokativExtension();
        $extension->load(array(), $container);

        $container->registerExtension($extension);
        }
    } 
