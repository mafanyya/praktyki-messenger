<?php

namespace ContainerO9yXLN6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReactControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReactController' shared autowired service.
     *
     * @return \App\Controller\ReactController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ReactController.php';

        $container->services['App\\Controller\\ReactController'] = $instance = new \App\Controller\ReactController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ReactController', $container));

        return $instance;
    }
}
