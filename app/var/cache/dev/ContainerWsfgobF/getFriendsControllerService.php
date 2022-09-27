<?php

namespace ContainerWsfgobF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFriendsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FriendsController' shared autowired service.
     *
     * @return \App\Controller\FriendsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FriendsController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordAuthenticatedUserInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/User.php';

        $container->services['App\\Controller\\FriendsController'] = $instance = new \App\Controller\FriendsController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), new \App\Entity\User(), new \App\Entity\Friendship(), ($container->privates['App\\Repository\\FriendShipRepository'] ?? $container->load('getFriendShipRepositoryService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\FriendsController', $container));

        return $instance;
    }
}
