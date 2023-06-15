<?php

namespace ContainerMWvUFx7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TestController' shared autowired service.
     *
     * @return \App\Controller\TestController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TestController.php';

        $container->services['App\\Controller\\TestController'] = $instance = new \App\Controller\TestController(($container->privates['App\\Repository\\SomeEntityRepository'] ?? $container->load('getSomeEntityRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\TestController', $container));

        return $instance;
    }
}
