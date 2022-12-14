<?php

namespace ContainerVmcXTR7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PageController' shared autowired service.
     *
     * @return \App\Controller\PageController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PageController'] = $instance = new \App\Controller\PageController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\HobbyRepository'] ?? $container->load('getHobbyRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\PageController', $container));

        return $instance;
    }
}
