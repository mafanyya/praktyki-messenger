<?php

namespace ContainerVmcXTR7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRootControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RootController' shared autowired service.
     *
     * @return \App\Controller\RootController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RootController'] = $instance = new \App\Controller\RootController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\RootController', $container));

        return $instance;
    }
}
