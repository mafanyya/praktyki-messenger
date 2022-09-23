<?php

namespace ContainerG6bmD5W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddUserFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AddUserFormType' shared autowired service.
     *
     * @return \App\Form\AddUserFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AddUserFormType.php';

        return $container->privates['App\\Form\\AddUserFormType'] = new \App\Form\AddUserFormType();
    }
}
