<?php

namespace ContainerK9GJMTP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UsersController' shared autowired service.
     *
     * @return \App\Controller\UsersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UsersController.php';

        $container->services['App\\Controller\\UsersController'] = $instance = new \App\Controller\UsersController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\HobbyRepository'] ?? $container->load('getHobbyRepositoryService')), ($container->privates['App\\Repository\\CountryRepository'] ?? $container->load('getCountryRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\UsersController', $container));

        return $instance;
    }
}
