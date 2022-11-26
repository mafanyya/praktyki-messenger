<?php

namespace ContainerXopl97H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHobbyTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\HobbyType' shared autowired service.
     *
     * @return \App\Form\HobbyType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/HobbyType.php';

        return $container->privates['App\\Form\\HobbyType'] = new \App\Form\HobbyType();
    }
}
